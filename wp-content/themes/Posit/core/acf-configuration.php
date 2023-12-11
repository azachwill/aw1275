<?php

add_filter('acf/settings/save_json', function () {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function ($paths) {
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});

// Formats field value of Price Table > Pricing Cards > Price

add_filter('acf/format_value/key=field_6310ed1478fb6', 'fix_number', 20, 3);

function fix_number($value, $post_id, $field) {
    $value = number_format($value);
    return $value;
}