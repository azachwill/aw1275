<?php

function custom_taxonomy_setup()
{
    $taxonomies = [
        [
            'name' => 'topics',
            'hierarchical' => true,
            'parent_taxonomy' => null,
            'parent_taxonomy_colon' => null,
            'plural_label' => 'Topics',
            'singular_label' => 'Topics'
        ],
        [
            'name' => 'segments',
            'hierarchical' => true,
            'parent_taxonomy' => null,
            'parent_taxonomy_colon' => null,
            'plural_label' => 'Product Categories',
            'singular_label' => 'Product Category',
            'rewrite' => ['slug' => 'products'],
        ],
        [
            'name' => 'cheatsheet_type',
            'hierarchical' => true,
            'parent_taxonomy' => null,
            'parent_taxonomy_colon' => null,
            'plural_label' => 'Cheatsheet Types',
            'singular_label' => 'Cheatsheet Type',
        ],
        [
            'name' => 'industries',
            'hierarchical' => true,
            'parent_taxonomy' => null,
            'parent_taxonomy_colon' => null,
            'plural_label' => 'Industries',
            'singular_label' => 'Industry',
        ]
    ];

    foreach ($taxonomies as $taxonomy) {

        $labels = [
            'menu_name' => __($taxonomy['plural_label']),
            'parent_item' => $taxonomy['parent_taxonomy'],
            'all_items' => __('All ' . $taxonomy['plural_label']),
            'name' => _x($taxonomy['singular_label'], 'taxonomy general name'),
            'edit_item' => __('Edit ' . $taxonomy['singular_label']),
            'parent_item_colon' => $taxonomy['parent_taxonomy_colon'],
            'search_items' => __('Search ' . $taxonomy['plural_label']),
            'update_item' => __('Update ' . $taxonomy['singular_label']),
            'popular_items' => __('Popular ' . $taxonomy['plural_label']),
            'add_new_item' => __('Add New ' . $taxonomy['singular_label']),
            'new_item_name' => __('New ' . $taxonomy['singular_label'] . ' Name'),
            'add_or_remove_items' => __('Add or remove ' . $taxonomy['plural_label']),
            'singular_name' => _x($taxonomy['singular_label'], 'taxonomy singular name'),
            'choose_from_most_used' => __('Choose from the most used ' . $taxonomy['plural_label']),
            'separate_items_with_commas' => __('Separate ' . $taxonomy['plural_label'] . ' with commas'),
        ];

        $args = [
            'show_ui' => true,
            'query_var' => true,
            'labels' => $labels,
            'show_admin_column' => false,
            'hierarchical' => $taxonomy['hierarchical'],
            'update_count_callback' => '_update_post_term_count',
            'rewrite' => $taxonomy['rewrite'] ?? ['slug' => $taxonomy['name']],
        ];

        register_taxonomy($taxonomy['name'], null, $args);
    }
}

function get_custom_post_types()
{
    return [
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'product',
            'slug' => 'products',
            'plural_label' => 'Products',
            'singular_label' => 'Product',
            'menu_icon' => 'dashicons-products',
            'taxonomies' => ['segments'],
            'has_single' => true,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'products/%segment%'
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'hangouts',
            'slug' => 'data-science-hangout',
            'plural_label' => 'Hangouts',
            'singular_label' => 'Hangout',
            'menu_icon' => 'dashicons-video-alt2',
            'taxonomies' => ['topics'],
            'has_single' => true,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'data-science-hangout',
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'speakers',
            'slug' => 'speakers',
            'plural_label' => 'Speakers',
            'singular_label' => 'Speaker',
            'menu_icon' => 'dashicons-groups',
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'speakers',
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'customer_stories',
            'slug' => 'customer-stories',
            'plural_label' => 'Customer Stories',
            'singular_label' => 'Customer Story',
            'menu_icon' => 'dashicons-testimonial',
            'taxonomies' => ['topics', 'industries'],
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'about/customer-stories',
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'champions',
            'slug' => 'champions',
            'plural_label' => 'Champions',
            'singular_label' => 'Champion',
            'menu_icon' => 'dashicons-superhero',
            'taxonomies' => ['topics'],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'champions',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'partner_companies',
            'slug' => 'partner-companies',
            'plural_label' => 'Partner Companies',
            'singular_label' => 'Partner Company',
            'menu_icon' => 'dashicons-buddicons-buddypress-logo',
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'partner-companies',
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'customer_logos',
            'slug' => 'customer-logos',
            'plural_label' => 'Customer Logos',
            'singular_label' => 'Customer Logo',
            'menu_icon' => 'dashicons-nametag',
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'customer-logos',
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'industry',
            'slug' => 'industry',
            'plural_label' => 'Industries',
            'singular_label' => 'Industry',
            'menu_icon' => 'dashicons-building',
            'taxonomies' => ['topics'],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'solutions',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'download',
            'slug' => 'download',
            'plural_label' => 'Downloads',
            'singular_label' => 'Download',
            'menu_icon' => 'dashicons-download',
            'taxonomies' => [],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'download',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'videos',
            'slug' => 'videos',
            'plural_label' => 'Videos',
            'singular_label' => 'Video',
            'menu_icon' => 'dashicons-video-alt3',
            'taxonomies' => ['category', 'post_tag'],
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'resources/videos'
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'cheatsheets',
            'slug' => 'cheatsheets',
            'plural_label' => 'Cheatsheets',
            'singular_label' => 'Cheatsheet',
            'menu_icon' => 'dashicons-media-code',
            'taxonomies' => ['category', 'cheatsheet_type'],
            'has_single' => false,
            'rewrite' => [
                'with_front' => false,
                'slug' => 'resources/cheatsheets'
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'talks',
            'slug' => 'talks',
            'plural_label' => 'Talks',
            'singular_label' => 'Talk',
            'menu_icon' => 'dashicons-format-chat',
            'taxonomies' => [],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'talks',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'workshops',
            'slug' => 'workshops',
            'plural_label' => 'Workshops',
            'singular_label' => 'Workshop',
            'menu_icon' => 'dashicons-welcome-learn-more',
            'taxonomies' => [],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'workshops',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'keynotes',
            'slug' => 'keynotes',
            'plural_label' => 'Keynotes',
            'singular_label' => 'Keynote',
            'menu_icon' => 'dashicons-pressthis',
            'taxonomies' => [],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'keynotes',
                'with_front' => false,
            ]
        ],
        [
            'has_archive' => false,
            'exclude_sites' => [],
            'publicly_queryable' => true,
            'name' => 'analyst_reports',
            'slug' => 'analyst-reports',
            'plural_label' => 'Analyst Reports',
            'singular_label' => 'Analyst Report',
            'menu_icon' => 'dashicons-chart-bar',
            'taxonomies' => [],
            'has_single' => false,
            'rewrite' => [
                'slug' => 'about/analyst-reports',
                'with_front' => false,
            ]
        ],
        [
            'taxonomies' => [],
            'exclude_sites' => [],
            'name' => 'release_notes',
            'slug' => 'release-notes',
            'plural_label' => 'Release Notes',
            'singular_label' => 'Release Note',
            'menu_icon' => 'dashicons-media-text',

            'has_archive' => true,
            'has_single' => false,
            'publicly_queryable' => true,

            'rewrite' => [
                'with_front' => false,
                'slug' => 'products/open-source/rstudio/release-notes'
            ]
        ]
    ];
}

function custom_post_type_setup()
{
    $post_types = get_custom_post_types();

    foreach ($post_types as $post_type) {

        $labels = [
            'name' => _x($post_type['plural_label'], 'Post Type General Name'),
            'singular_name' => _x($post_type['singular_label'], 'Post Type Singular Name'),
            'menu_name' => __($post_type['plural_label']),
            'name_admin_bar' => __($post_type['plural_label']),
            'parent_item_colon' => __('Parent Item:'),
            'all_items' => __('All ' . $post_type['plural_label']),
            'add_new_item' => __('Add New ' . $post_type['singular_label']),
            'add_new' => __('Add New'),
            'new_item' => __('New ' . $post_type['plural_label']),
            'edit_item' => __('Edit ' . $post_type['plural_label']),
            'update_item' => __('Update ' . $post_type['plural_label']),
            'view_item' => __('View ' . $post_type['plural_label']),
            'search_items' => __('Search ' . $post_type['plural_label']),
            'not_found' => __($post_type['plural_label'] . ' Not found'),
            'not_found_in_trash' => __($post_type['plural_label'] . ' Not found in Trash'),
        ];

        $args = [
            'label' => __($post_type['name']),
            'description' => __('The post type for ' . $post_type['name']),
            'menu_icon' => __($post_type['menu_icon']),
            'labels' => $labels,
            'supports' => [
                'title',
                'thumbnail',
                'editor',
                'excerpt',
                'revisions',
                'custom-fields',
                'page-attributes',
                'post-formats',
            ],
            'taxonomies' => isset($post_type['taxonomies']) ? $post_type['taxonomies'] : ['tags'],
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => isset($post_type['hide_in_menu']) && !$post_type['hide_in_menu'] ? false : true,
            'menu_position' => 5,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => isset($post_type['has_archive']) && !$post_type['has_archive'] ? false : true,
            'exclude_from_search' => false,
            'publicly_queryable' => isset($post_type['publicly_queryable']) && !$post_type['publicly_queryable'] ? false : true,
            'capability_type' => 'post',
            'rewrite' => $post_type['rewrite'] ?? ['slug' => $post_type['slug']],
        ];

        register_post_type($post_type['name'], $args);
    }
}

function add_cpt_options_submenu_()
{

    acf_add_options_page(array(
        'page_title' => 'Post Options',
        'menu_title' => 'Post Options',
        'menu_slug' => 'post_options',
        'parent_slug' => 'edit.php',
    ));

    acf_add_options_page(array(
        'page_title' => 'Hangout Options',
        'menu_title' => 'Hangout Options',
        'menu_slug' => 'hangout_options',
        'parent_slug' => 'edit.php?post_type=hangouts',
    ));

    acf_add_options_page(array(
        'page_title' => 'Champions Overview Options',
        'menu_title' => 'Champions Overview Options',
        'menu_slug' => 'champions_overview_options',
        'parent_slug' => 'edit.php?post_type=champions',
    ));

    acf_add_options_page(array(
        'page_title' => 'Customer Story Global Options',
        'menu_title' => 'Customer Story Global Options',
        'menu_slug' => 'customer_story_options',
        'parent_slug' => 'edit.php?post_type=customer_stories',
    ));

    acf_add_options_page(array(
        'page_title' => 'Video Global Options',
        'menu_title' => 'Video Global Options',
        'menu_slug' => 'video_options',
        'parent_slug' => 'edit.php?post_type=videos',
    ));

    acf_add_options_page(array(
        'page_title' => 'Translations',
        'menu_title' => 'Translations',
        'menu_slug' => 'translations',
        'parent_slug' => 'edit.php?post_type=cheatsheets',
    ));

    acf_add_options_page(array(
        'page_title' => 'Workshop Options',
        'menu_title' => 'Workshop Options',
        'menu_slug' => 'workshop_options',
        'parent_slug' => 'edit.php?post_type=workshops',
    ));

    acf_add_options_page(array(
        'page_title' => 'Keynote Options',
        'menu_title' => 'Keynote Options',
        'menu_slug' => 'keynote_options',
        'parent_slug' => 'edit.php?post_type=keynotes',
    ));

    acf_add_options_page(array(
        'page_title' => 'Talk Options',
        'menu_title' => 'Talk Options',
        'menu_slug' => 'talk_options',
        'parent_slug' => 'edit.php?post_type=talks',
    ));

    acf_add_options_page(array(
        'page_title' => 'Analyst Reports Options',
        'menu_title' => 'Analyst Reports Options',
        'menu_slug' => 'analyst_reports_options',
        'parent_slug' => 'edit.php?post_type=analyst_reports',
    ));
}

function create_post_type()
{
    custom_taxonomy_setup();
    custom_post_type_setup();
    add_cpt_options_submenu_();
}

add_action('init', 'create_post_type');
