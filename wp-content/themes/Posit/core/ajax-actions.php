<?php

function get_ajax_posts() {
    if(isset($_POST['data'])) {
        $taxQuery = [];
        $metaQuery = [];
        $data = $_POST['data'];
        $filters = $data['filters'];

        $page = isset($data['page']) && is_numeric($data['page']) ? (int) $data['page'] : 1;
        $searchText = $data['search'] ?? '';
        $postType = $data['postType'] ?? '';
        $postsPerPage = isset($data['postsPerPage']) && is_numeric($data['postsPerPage']) ? (int) $data['postsPerPage'] : -1;

        $postStatus = isset($data['postArchive']) && filter_var($data['postArchive'], FILTER_VALIDATE_BOOLEAN) ? 'archive' : 'publish';

        if (!empty($filters)) {
            foreach($filters as $postObject) {
                
                if (is_string($postObject['ids'])){
                    $postObject['ids'] = explode(',', $postObject['ids']);
                }
                
                if($postObject['type'] !== 'taxonomy') {
                    $queryArgs = getMetaQueryArgs($postObject['name'], $postObject['ids']);
                    $metaQuery = array_merge($metaQuery, $queryArgs);
                } else {
                    $byTaxonomy = getTaxonomyArgById($postObject['name'], $postObject['ids']);
                    $taxQuery = [
                        'tax_query' => array(
                        'relation' => 'OR',
                        $byTaxonomy,
                    )];
                }
            }
        }

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            's' => urldecode($searchText),
            'post_type' => $postType,
            'posts_per_page' => $postsPerPage,
            'paged' => $postsPerPage !== -1,
            'meta_query' => $metaQuery,
            'post_status' => $postStatus,
        );

        $args += $taxQuery;

        $qArgs = [
            'nopaging' => false,
            'paged' => $page,
        ];

        $results = getCustomPostsQuery($args, $qArgs, true);

        if ($postType === 'customer_stories') {
            foreach($results['posts'] as $index => $post) {
                $response .= bladerunner('components.customer-stories.post', ['post' => $post, 'index' => $index]);
            }
        } else if ($postType === 'workshops') {
            foreach($results['posts'] as $index => $post) {
                $response .= bladerunner('components.workshops.post', ['post' => $post, 'index' => $index]);
            }
        }else {
            foreach($results['posts'] as $index => $post) {
                $response .= bladerunner('partials.post-slider-card', ['post' => $post, 'size' => 'md']);
            }
        }

        if (count($results['posts']) === 0) {
            $response .= bladerunner('components.search.empty-state');
        }

        if ($results['num_pages'] > 1) {
            $response .= bladerunner('partials.pagination', [
                'pages' => $results['num_pages'],
                'currentPage' => (int)($page)
            ]);
        }

        wp_die();
    }
}

function get_paginated_posts() {
    if(isset($_POST['data'])) {
        $data = $_POST['data'];
        $page = $data['page'] ?? 1;
        $slug = $data['slug'] ?? '';
        $postType = $data['postType'] ?? '';
        $postsPerPage = $data['postsPerPage'] ?? -1;

        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'order' => 'DESC',
            'post_type' => $postType,
            'post_status' => 'publish',
            'orderby'   => 'publish_date',
            'posts_per_page' => $postsPerPage,
            'paged' => $postsPerPage !== -1,
        ];

        if($data['postType'] === 'cheatsheets') {
            $args += [
                'order' => 'ASC',
                'tax_query' => [
                    [
                        'taxonomy' => 'cheatsheet_type',
                        'field' => 'slug',
                        'terms' => $slug,
                    ]
                ],
            ];
        }

        $qArgs = [
            'nopaging' => false,
            'paged' => $page ?? 1,
        ];

        $results = getCustomPostsQuery($args, $qArgs, true);

        foreach($results['posts'] as $index => $post) {
            $response .= bladerunner('partials.post-slider-card', ['post' => $post, 'size' => 'sm']);
        }

        if ($results['num_pages'] > 1) {
            $response .= bladerunner('partials.pagination', [
                'pages' => $results['num_pages'],
                'currentPage' => (int)($page)
            ]);
        }

        wp_die();
    }
}

// Fire AJAX action for both logged in and non-logged in users
add_action('wp_ajax_get_ajax_posts', 'get_ajax_posts');
add_action('wp_ajax_nopriv_get_ajax_posts', 'get_ajax_posts');

add_action('wp_ajax_get_paginated_posts', 'get_paginated_posts');
add_action('wp_ajax_nopriv_get_paginated_posts', 'get_paginated_posts');