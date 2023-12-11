<?php

/**
 * Overrides products URLs that show in the admin
 */
function override_product_url_structure($post_link, $post, $leavename, $sample)
{
    if (false !== strpos($post_link, '%segment%')) {
        $segment = get_the_terms($post->ID, 'segments');

        if (!(empty($segment) || is_wp_error($segment))) {
            $slug = array_pop($segment)->slug;
            $post_link = str_replace('%segment%', $slug, $post_link);
        } else {
            $post_link = str_replace('%segment%', 'uncategorized', $post_link);
        }
    }
    return $post_link;
}

add_filter('post_type_link', 'override_product_url_structure', 10, 4);

/**
 * Adds rewrite rules for products, so they match our desired URL scheme
 */
function add_products_url_rewrite_rule($products)
{
    $products = is_array($products)
        ? $products
        : get_posts([
            'numberposts' => -1,
            'post_type' => 'product',
        ]);

    foreach ($products as $product) {
        $cat = 'uncategorized';
        $segment = get_the_terms($product->ID, 'segments');

        if (!(empty($segment) || is_wp_error($segment))) {
            $cat = array_pop($segment)->slug;
        }

        add_rewrite_rule(
            "^products/{$cat}/{$product->post_name}/?$",
            "index.php?post_type={$product->post_type}&name={$product->post_name}",
            'top'
        );
    }
}

add_action('init', 'add_products_url_rewrite_rule');

/**
 * Automatically flush permalinks when products are updated or created
 */
function flush_products_rewrite($post_id, $post)
{
    $cpt = 'product';
    if ($post->post_type === $cpt) {
        add_products_url_rewrite_rule([$post]);
        flush_rewrite_rules();
    }
}

add_action('edit_post', 'flush_products_rewrite', 10, 3);
add_action('create_product', 'flush_products_rewrite', 10, 3);


/**
 * Adds rewrite rules for posts to add /blog prefix
 */

function add_rewrite_rules( $wp_rewrite )
{
    $new_rules = array(
        'blog/(.+?)/?$' => 'index.php?post_type=post&name='. $wp_rewrite->preg_index(1),
    );

    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}
add_action('generate_rewrite_rules', 'add_rewrite_rules');

/**
 * Overrides posts URLs that show in the admin
 */
function change_blog_links($post_link, $id=0){

    $post = get_post($id);

    if( is_object($post) && $post->post_type == 'post'){
        return home_url('/blog/'. $post->post_name.'/');
    }

    return $post_link;
}
add_filter('post_link', 'change_blog_links', 1, 3);
