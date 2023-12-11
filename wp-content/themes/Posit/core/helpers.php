<?php

function redirect_404(): void
{
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part('404');
    exit();
}

function getHashedAsset($fileName)
{
    $manifestFile = get_template_directory() . '/dist/mix-manifest.json';
    $manifestFilename = json_decode(file_get_contents($manifestFile), true)[$fileName];

    if (!$manifestFilename) {
        return '';
    }

    return filter_var($manifestFilename, FILTER_VALIDATE_URL)
        ? $manifestFilename
        : get_template_directory_uri() . '/dist' . $manifestFilename;
}

function getRenderedBlogPost($slug, $redirect404 = false): string
{
    $filePath = "public/markdown-blogs/{$slug}/index.html";

    $templateDir = get_template_directory();
    $templateUri = get_template_directory_uri();

    $exists = file_exists("{$templateDir}/{$filePath}");
    $renderedHtml = $exists ? "{$templateUri}/{$filePath}" : '';

    if (!$renderedHtml && $redirect404) {
        // Redirect to 404 page
        redirect_404();
    }

    return $renderedHtml;
}

//Helper to get excerpt form a post
function wp_trim_excerpt_custom($text = '', $post = null, $limit = 55)
{
    $raw_excerpt = $text;
    if ('' == $text) {
        $post = get_post($post);
        $text = get_the_content('', false, $post);

        $text = strip_shortcodes($text);
        $text = excerpt_remove_blocks($text);

        /** This filter is documented in wp-includes/post-template.php */
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);

        /* translators: Maximum number of words used in a post excerpt. */
        $excerpt_length = intval(_x($limit, 'excerpt_length'));

        /**
         * Filters the maximum number of words in a post excerpt.
         *
         * @param int $number The maximum number of words. Default 55.
         * @since 2.7.0
         *
         */
        $excerpt_length = (int)apply_filters('excerpt_length', $excerpt_length);

        /**
         * Filters the string in the "more" link displayed after a trimmed excerpt.
         *
         * @param string $more_string The string shown within the more link.
         * @since 2.9.0
         *
         */
        $excerpt_more = apply_filters('excerpt_more', '' . '&hellip;');
        $text = wp_trim_words($text, $excerpt_length, $excerpt_more);
    }

    /**
     * Filters the trimmed excerpt string.
     *
     * @param string $text The trimmed text.
     * @param string $raw_excerpt The text prior to trimming.
     * @since 2.8.0
     *
     */
    return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}


function getPostThumbnail($ID)
{
    $postImage = get_the_post_thumbnail_url($ID);

    return $postImage
        ? $postImage
        : '';
}

function serializePost($post)
{
    if (is_numeric($post)) {
        $post = get_post($post) ?? null;
    }
    
    if (!$post instanceof WP_Post || empty($post)){
        return [];
    }

    $imageId = get_post_thumbnail_id($post);
    $postType = get_post_type_object($post->post_type);
    
    $formattedCategories = [];
    $categories = get_the_category($post->ID);
    foreach ($categories as $category) {
        $response = [
            'term_id' => $category->term_id,
            'slug' => $category->slug,
            'name' => $category->name,
        ];
        $formattedCategories[] = $response;
    }
    
    $formattedTags = [];
    $tags = get_the_tags($post);
    if ($tags){
        foreach ($tags as $tag) {
            $tagsFields = [
                'term_id' => $tag->term_id,
                'slug' => $tag->slug,
                'name' => $tag->name,
            ];
            $formattedTags[] = $tagsFields;
        }
    }

    $post = [
        'ID' => $post->ID,
        'url' => get_permalink($post->ID),
        'title' => get_the_title($post->ID),
        'excerpt' => get_the_excerpt($post->ID),
        'postType' => $postType ? $postType->labels->singular_name : $post->post_type,
        'image' => getPostThumbnail($post->ID),
        'imageAlt' => get_post_meta($imageId , '_wp_attachment_image_alt', true),
        'customData' => get_fields($post->ID),
        'publishDate' => date('F d, Y', strtotime($post->post_date)),
        'categories' => $formattedCategories,
        'tags' => $formattedTags
    ];

    if ($postType && $postType->name === 'hangouts') {
        $post['customData']['status'] = getHangoutStatus($post['customData']['date_and_time']);
    }

    return $post;
}

function getHangoutAndConferenceStatus($startDate, $endDate): string
{
    $dateTime = new DateTime("now", new DateTimeZone('America/New_York'));
    $now = strtotime($dateTime->format('Y-m-d H:i:s'));

    if ($startDate > $now) {
        $status = 'upcoming';
    } else if ($now <= $endDate) {
        $status = 'live';
    } else {
        $status = 'past';
    }

    return $status;
}

function serializeTerm(WP_Term $term)
{

    $term = [
        'ID' => $term->term_id,
        'url' => get_term_link($term->term_id, $term->taxonomy),
        'title' => $term->name,
        'excerpt' => $term->description,
        'entries' => $term->count,
        'customData' => get_fields($term),
        'slug' => $term->slug,
        'taxonomy' => $term->taxonomy
    ];


    return $term;
}

function serializePosts(WP_Query $query)
{
    $posts = [];
    foreach ($query->get_posts() as $post) {
        $posts[] = serializePost($post);
    }

    wp_reset_postdata();
    return $posts;
}


function getLatestPosts($postType = ['any'], $limit = 3, $args = [], $paged = false)
{
    $query = new WP_Query(array_merge(
        [
            'order' => 'DESC',
            'order_by' => 'publish_date',
            'post_type' => $postType,
            'posts_per_page' => $limit,
            'post_status' => 'publish'
        ],
        $args
    ));

    $posts = serializePosts($query);
    if ($paged) {
        return [
            'posts' => $posts,
            'pages' => $query->max_num_pages
        ];
    }

    return $posts;
}

function getCustomPostsQuery($args1 = [], $args2 = [], $paged = false)
{
    $query = new WP_Query(array_merge($args1, $args2));
    $posts = serializePosts($query);

    if ($paged) {
        return [
            'posts' => $posts,
            'num_pages' => $query->max_num_pages,
            
        ];
    }

    return $posts;
}

function get_custom_post_type_by_taxonomy($taxonomy) {
    $customPostTypes = [];
    foreach (get_custom_post_types() as $customType) {
        if(in_array($taxonomy, $customType['taxonomies'])) {
            array_push($customPostTypes, $customType['name']);
        }
    }
    return $customPostTypes;
}

function relationship_options_filter($options, $field, $the_post) {
    $options['post_status'] = array('publish');
    return $options;
}

function getProductsCategories()
{
    $categories = get_categories([
        'taxonomy' => 'segments',
        'type' => 'product',
    ]);

    $formattedResponse = [];

    foreach ($categories as $category) {
        $response = [
            'name' => $category->name,
            'slug' => $category->slug,
        ];

        array_push($formattedResponse, $response);
    }

    return $formattedResponse;
}

function getTaxonomyArg($taxonomy, $terms){

    $taxArg = [];

    if (count($terms) > 1) {
        foreach ($terms as $term) {
            array_push($taxArg, ['taxonomy' => $taxonomy, 'field' => 'slug', 'terms' => $term]);
        }
        return $taxArg;
    } else {
        return [[
            'taxonomy' => $taxonomy,
            'field' => 'slug',
            'terms' => $terms
        ]];
    }
}

function getTaxonomyArgById($taxonomy, $terms){
    $taxArg = [];

    if (count($terms) > 1) {
        foreach ($terms as $term) {
            array_push($taxArg, $term);
        }
        return ['taxonomy' => $taxonomy, 'field' => 'term_id', 'terms' => $taxArg];
    } else {
        return [
            'taxonomy' => $taxonomy,
            'field' => 'term_id',
            'terms' => $terms
        ];
    }
}

function productSegmentTaxonomyRequest($taxArgs, $postType) {
    $taxQuery = count($taxArgs) > 1 ?
        ['tax_query' => array_merge(['relation' => 'OR'], $taxArgs)] :
        ['tax_query' => $taxArgs];
    $entries = getLatestPosts($postType, -1, $taxQuery);
    return $entries;
}


add_filter('acf/fields/post_object/query/name=speakers', 'relationship_options_filter', 10, 3);
add_filter('acf/fields/post_object/query/name=primary_speaker', 'relationship_options_filter', 10, 3);


function get_string_without_spaces($str): string {
    return strtolower(preg_replace('/\s/', '-', $str));
}

function get_content_table_fromACF($contentTable) {
    $sideMenu = [];

    $getContentLink = function ($content) {
        if($content['type']==='section') {
            $id = get_string_without_spaces($content['title']);
            return '#'.$id;
        }
        if($content['type']==='external' ) {
            return $content['url'];
        }
        if($content['type']==='page_url' ) {
            return $content['link'];
        }
        return $content['file'];
    };

    foreach ($contentTable as $content) {
        array_push($sideMenu, ['label' => $content['title'], 'link'=> $getContentLink($content)]);
    }

    return $sideMenu;
}

function getShortPagination($totalPages, $currentPage = 1)
{
    $pageRange = 7;
    $availablePages = range(1, $totalPages);
    $midRange = ceil($pageRange / 2);

    if ($currentPage <= $midRange || ($totalPages - $pageRange) <= 0) {
        return array_slice($availablePages, 0, $pageRange);
    }

    if ($currentPage > ($totalPages - $midRange)) {
        return array_slice($availablePages, $totalPages - $pageRange, $pageRange);
    }

    return array_slice($availablePages, $currentPage - $midRange, $pageRange);
}

function acf_load_revision_select_field_choices( $field ) {

    // reset choices
    $field['choices'] = array();


    // get the textarea value from options page without any formatting

    $productsFile = file_get_contents(__DIR__ . '../../dist/file-assets/product-select.txt', false);

    if ($productsFile) {

        $choices = $productsFile;

        // explode the value so that each line is a new array piece
        $choices = explode("\n", $choices);


        // remove any unwanted white space
        $choices = array_map('trim', $choices);


        // loop through array and add to field 'choices'
        if( is_array($choices) ) {

            foreach( $choices as $choice ) {

                // vars
                $value = strstr($choice, ':', true);
                $label = str_replace(':', '', strstr($choice, ':'));


                // append to choices
                $field['choices'][ $value ] = $label;

            }

        }

        // return the field
        return $field;

    } else {
        return '';
    }

}

function getOsInfo(): string
{
    $os = 'other';
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (preg_match('/macintosh|mac os x/i', $userAgent)) {
        $os = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $userAgent)) {
        $os = 'windows';
    }
    return $os;
}

function getProductDetails($productValue)
{
    $product = false;
    $uploadsPath = wp_get_upload_dir()['basedir'] ?: '';
    $downloadsFile = "{$uploadsPath}/downloads.json";
    $fallbackDownloadsFile = get_template_directory() . '/dist/file-assets/products.json';

    /*
        Use '@' to suppress php warnings when the function can't find the file since we have a fallback
        Reference: https://www.php.net/manual/en/language.operators.errorcontrol.php
    */
    $productsFile = @file_get_contents($downloadsFile) ?: @file_get_contents($fallbackDownloadsFile) ?: null;

    if ($productsFile) {
        $product = getProductObject($productValue, json_decode($productsFile));
    }
    return $product;
}

function getProductObject($path, $obj) {
    $path = explode('/', $path);
    $temp =& $obj;

    foreach($path as $key) {
        $temp =& $temp->{$key};
    }

    return $temp;
}

function getURLParams() {
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    return parse_url($link);
}

function getTerms($taxonomy) {
    $terms = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => false,
        'orderby'  => 'name',
        'order'    => 'DESC'
    ]);
    return $terms;
}

function getMetaQueryArgs($customKey, $values) {
    $argQuery = ['relation' => 'OR'];
    if (count($values) > 1) {
        foreach ($values as $value) {
            array_push($argQuery, ['key' => $customKey, 'value' => $value, 'compare' => 'LIKE']);
        }

        return $argQuery;
    } else {
        return [[
                'key'     => $customKey,
                'value'   => $values[0], // the ID of the member
                'compare' => 'LIKE',
        ]];
    }
}

function filter_children_by_custom_field($post) {
    $fields = get_fields($post['ID']);
    return $fields['page_as_tab_on_main_pricing_page'] ?? false;
}

function get_pricing_filtered_children($parent) {
    return get_children(['post_parent' => $parent, 'post_type' => 'page', 'orderby' => 'title', 'order' => 'ASC'], ARRAY_A);
}

function serializeListingContent($contentRows) {
    $serializedData = [];

    foreach ($contentRows as $row) {
        if($row['content_type'] === 'internal') {
            $serializedInternalData = serializePost($row['internal_resource'][0]);
        } else {
            $externalData = $row['external_resource'];
            $serializedInternalData = [
                'ID' => null,
                'url' => $externalData['url'],
                'title' => $externalData['title'],
                'excerpt' => $externalData['description'],
                'postType' => null,
                'image' => $externalData['image']['url'],
                'imageAlt' => $externalData['image']['alt'],
                'customData' => null,
                'publishDate' => null,
                'categories' => null
            ];
        }

        array_push($serializedData, $serializedInternalData);
    }

    return $serializedData;
}


function getBreadcrumbArray($post, $optionName = 'post') {

    $archiveOptionsField = get_field($optionName.'_archive_options', 'option');

    $serializePost = serializePost($post);
    $archiveOptionsField = $archiveOptionsField ?? $serializePost['customData']['breadcrumb_options'] ?? '';

    $breadcrumbs = [];
    $antecesorsArray = get_post_ancestors($post->ID);

    $postType = get_post_type($post);
    $postTypeObj = get_post_type_object($postType);
    $archiveLink = get_post_type_archive_link($postType);

    if($archiveOptionsField && $archiveOptionsField['has_custom_archive']){
        $prevPage = $archiveOptionsField['page'];
        if(isset($archiveOptionsField['display_title'])){
            $prevPage->post_title = $archiveOptionsField['display_title'];
        }
        $breadcrumbs[] = $prevPage;
    }elseif ($postTypeObj->has_archive && $archiveLink){
        $postTypeObj->guid = $archiveLink;
        $breadcrumbs[] = $postTypeObj;
    }
    elseif(!empty($antecesorsArray)){
        $breadcrumbs = $antecesorsArray;
    }

    $breadcrumbs[] = $post;
    return $breadcrumbs;
}

function getSelectedPostsContentFields($posts) {
    $postData = [];

    if(!empty($posts)){
        foreach ($posts as $key => $post) {
           $postData[$key] = serializePost($post);

            if($postData[$key]) {
                if($post->post_type === 'post') {
                    $postData[$key]['type'] = 'Blog';
                    $postData[$key]['description'] = $postData[$key]['customData']['post_content']['content'][0]['description'] ?? '';
                } else if($post->post_type === 'customer_stories') {
                    $postData[$key]['type'] = 'Customer story';
                    $postData[$key]['description'] = $postData[$key]['customData']['flexible_content'][0]['description'] ?? '';
                }
            }
        }
    }

    return $postData;
}

function pluralize($singular) {
    $last_letter = strtolower($singular[strlen($singular)-1]);

    switch($last_letter) {
        case 'y':
            return substr($singular,0,-1).'ies';
        case 's':
            return $singular.'es';
        default:
            return $singular.'s';
    }
}

function add_query_vars_filter($vars)
{
    $vars[] = "booking_calendar__c";
    return $vars;
}

add_action( 'template_redirect', 'wpse_128636_redirect_post' );

function wpse_128636_redirect_post() {
    if ( is_singular( 'cheatsheets' ) ) :
        wp_redirect( '/resources/cheatsheets', 301 );
        exit;
    endif;
}

add_filter('acf/load_field/name=revision_select', 'acf_load_revision_select_field_choices');
add_filter('query_vars', 'add_query_vars_filter');
get_query_var('booking_calendar__c');
