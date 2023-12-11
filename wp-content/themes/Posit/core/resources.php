<?php


global $terms_clauses_updated;


function getMainPostsID($addMainPosts, $mainPosts)
{
    $mainPostsId = [];
    if ($addMainPosts) {
        foreach ($mainPosts as $mainPost) {
            $mainPostsId[] = $mainPost['post']->ID;
        }
    } else {
        $mainPostsId[] = $mainPosts[0]['ID'];
    }

    return $mainPostsId;
}

function getTaxArgs($taxonomy, $terms)
{
    $termArgs = ['relation' => 'OR'];
    if ($terms) {
        foreach ($terms as $term) {
            $response = [
                'taxonomy' => $taxonomy,
                'field' => 'slug',
                'terms' => $term->slug,
            ];
            $termArgs[] = $response;
        }
    }

    return $termArgs;
}


function get_terms_by_post_type(array $args = [])
{
    global $terms_clauses_updated;
    $cacheKey = 'terms_by_post_type' . md5(serialize($args));

    // Validate this terms clauses are updated only once
    if (!$terms_clauses_updated) {

        $args = wp_parse_args($args);
        $args['post_types'] = (array)($args['post_types'] ?? []);
        $args['post_status'] = (array)($args['post_status'] ?? ['publish']);

        function wp_filter_taxonomies_by_cpt($pieces, $tax, $args) {
            global $wpdb;
            global $terms_clauses_updated;

            $pieces['fields'] .= ", COUNT(*) ";
            //Join extra tables to restrict by post type.
            $pieces['join'] .= " 
                INNER JOIN $wpdb->term_relationships AS r ON r.term_taxonomy_id = tt.term_taxonomy_id 
                INNER JOIN $wpdb->posts AS p ON p.ID = r.object_id 
            ";
            // Restrict by post type
            $post_types_str = implode(',', $args['post_types']);
            $pieces['where'] .= $wpdb->prepare(" AND p.post_type IN(%s)", $post_types_str);
            // Restrict by post status and group by term_id for counting.
            $post_status_str = implode(',', $args['post_status']);
            $pieces['where'] .= $wpdb->prepare(" AND p.post_status IN(%s) GROUP BY t.term_id", $post_status_str);

            $terms_clauses_updated = true;
            remove_filter(current_filter(), __FUNCTION__);
            return $pieces;
        }

        add_filter('terms_clauses', 'wp_filter_taxonomies_by_cpt', 10, 3);
    }

    $results = wp_cache_get($cacheKey);
    // Validate there aren't any cached results
    if (!$results) {
        $results = get_terms($args);
        wp_cache_set($cacheKey, $results);
    }

    return $results;
}
