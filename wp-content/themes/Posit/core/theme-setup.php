<?php

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'redirect' => false,
        'position' => '75',
    ]);

    acf_add_options_page([
        'page_title' => 'ACF Base',
        'menu_title' => 'Base',
        'menu_slug' => 'acf-base',
        'parent' => 'edit.php?post_type=acf-field-group',
        'redirect' => false,
        'position' => '76',
    ]);

    acf_add_options_page([
        'page_title' => 'ACF Partials',
        'menu_title' => 'Partials',
        'menu_slug' => 'acf-partials',
        'parent' => 'edit.php?post_type=acf-field-group',
        'redirect' => false,
        'position' => '77',
    ]);

    acf_add_options_page([
        'page_title' => 'ACF Components',
        'menu_title' => 'Components',
        'menu_slug' => 'acf-components',
        'parent' => 'edit.php?post_type=acf-field-group',
        'redirect' => false,
        'position' => '78',
    ]);
}

function admin_style_overrides()
{
    $handle = 'admin_style_overrides';
    $cssLocation = getHashedAsset('/admin.css');

    wp_enqueue_style($handle, $cssLocation);
}

add_action('admin_enqueue_scripts', 'admin_style_overrides');


add_theme_support('menus');
add_theme_support('post-thumbnails');
register_nav_menus(['legal' => __('Legal Menu', 'legal')]);

function sp_wp_tabs_ui_permission_role_to_editor(): string
{
    return 'sp_wp_tabs_ui';
}

add_filter('sp_wp_tabs_ui_permission', 'sp_wp_tabs_ui_permission_role_to_editor');
