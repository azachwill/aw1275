<?php
// Add new styles to the TinyMCE "formats" menu dropdown
function mce_set_styles_dropdown_options($settings)
{
    $styleFormats = [
        [
            'title' => 'Headings',
            'items' => [
                [
                    'title' => __('Heading 1'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h1',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h1-regular',
                        ],
                    ]
                ],
                [
                    'title' => __('Heading 2'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h2',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h2-regular',
                        ],
                    ]
                ],
                [
                    'title' => __('Heading 3'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h3',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h3-regular',
                        ],
                    ]
                ],
                [
                    'title' => __('Heading 4'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h4',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h4-regular',
                        ],
                    ]
                ],
                [
                    'title' => __('Heading 5'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h5',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h5-regular',
                        ],
                    ]
                ],
                [
                    'title' => __('Heading 6'),
                    'items' => [
                        [
                            'title' => __('Light'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h6',
                        ],
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'h6-regular',
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'Subheadings',
            'items' => [
                [
                    'title' => __('Subheading 1'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'sh1',
                ],
                [
                    'title' => __('Subheading 2'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'sh2',
                ],
                [
                    'title' => __('Subheading 3'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'sh3',
                ],
                [
                    'title' => __('Subheading 4'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'sh4',
                ],
            ]
        ],
        [
            'title' => 'Body',
            'items' => [
                [
                    'title' => __('Large'),
                    'items' => [
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-lg-regular',
                        ],
                        [
                            'title' => __('Semibold'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-lg-semibold',
                        ],
                    ]
                ],
                [
                    'title' => __('Medium'),
                    'items' => [
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-md-regular',
                        ],
                        [
                            'title' => __('Semibold'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-md-semibold',
                        ],
                    ]
                ],
                [
                    'title' => __('Small'),
                    'items' => [
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-sm-regular',
                        ],
                        [
                            'title' => __('Semibold'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-sm-semibold',
                        ],
                    ]
                ],
                [
                    'title' => __('X-small'),
                    'items' => [
                        [
                            'title' => __('Regular'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-xs-regular',
                        ],
                        [
                            'title' => __('Semibold'),
                            'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                            'classes' => 'body-xs-semibold',
                        ],
                    ]
                ],
            ]
        ],
        [
            'title' => 'UI',
            'items' => [
                [
                    'title' => __('Large'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'ui-large',
                ],
                [
                    'title' => __('Medium'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'ui-medium',
                ],
                [
                    'title' => __('Small'),
                    'selector' => 'li, p, h1, h2, h3, h4, h5, h6',
                    'classes' => 'ui-small',
                ],
            ]
        ],
        [
            'title' => 'Buttons',
            'items' => [
                [
                    'title' => __('Primary'),
                    'selector' => 'a, button',
                    'items' => [
                        [
                           'title' => __('Large'),
                           'selector' => 'a, button',
                           'classes' => 'btn-lg-primary',
                        ],
                        [
                           'title' => __('Medium'),
                           'selector' => 'a, button',
                           'classes' => 'btn-md-primary',
                        ],
                        [
                           'title' => __('Small'),
                           'selector' => 'a, button',
                           'classes' => 'btn-sm-primary',
                        ],
                    ]
                ],
                [
                    'title' => __('Secondary'),
                    'selector' => 'a, button',
                    'items' => [
                        [
                           'title' => __('Large'),
                           'selector' => 'a, button',
                           'classes' => 'btn-lg-secondary',
                        ],
                        [
                           'title' => __('Medium'),
                           'selector' => 'a, button',
                           'classes' => 'btn-md-secondary',
                        ],
                        [
                           'title' => __('Small'),
                           'selector' => 'a, button',
                           'classes' => 'btn-sm-secondary',
                        ],
                    ]
                ],
                [
                    'title' => __('Primary Dark'),
                    'selector' => 'a, button',
                    'items' => [
                        [
                           'title' => __('Large'),
                           'selector' => 'a, button',
                           'classes' => 'btn-lg-primary-dark',
                        ],
                        [
                           'title' => __('Medium'),
                           'selector' => 'a, button',
                           'classes' => 'btn-md-primary-dark',
                        ],
                        [
                           'title' => __('Small'),
                           'selector' => 'a, button',
                           'classes' => 'btn-sm-primary-dark',
                        ],
                    ]
                ],
                [
                    'title' => __('Secondary Dark'),
                    'selector' => 'a, button',
                    'items' => [
                        [
                           'title' => __('Large'),
                           'selector' => 'a, button',
                           'classes' => 'btn-lg-secondary-dark',
                        ],
                        [
                           'title' => __('Medium'),
                           'selector' => 'a, button',
                           'classes' => 'btn-md-secondary-dark',
                        ],
                        [
                           'title' => __('Small'),
                           'selector' => 'a, button',
                           'classes' => 'btn-sm-secondary-dark',
                        ],
                    ]
                ],
            ]
        ],

    ];

    $settings['style_formats_merge'] = false;
    $settings['style_formats'] = json_encode($styleFormats);

    return $settings;
}

add_filter('tiny_mce_before_init', 'mce_set_styles_dropdown_options');


function mce_load_content_css($settings)
{
    $adminCss = getHashedAsset('/app.css');

    $settings['content_css'] = empty($settings['content_css'])
        ? $adminCss
        : $settings['content_css'] . ',' . $adminCss;

    return $settings;
}

add_filter('tiny_mce_before_init', 'mce_load_content_css');


//Add wysiwyg custom colors
function my_mce4_options($init) {

    $custom_colours = '
        "17212B", "Blue 01",
        "223D50", "Blue 02",
        "447099", "Blue 03",
        "397AB8", "Blue 04",
        "A1B7CC", "Blue 05",
        "E5F0FC", "Blue 06",
        "404041", "Gray 01",
        "555557", "Gray 02",
        "CFCFD1", "Gray 03",
        "DDE1E4", "Gray 04",
    ';

    // build colour grid default+custom colors
    $init['textcolor_map'] = '['.$custom_colours.']';

    // change the number of rows in the grid if the number of colors changes
    // 8 swatches per row
    $init['textcolor_rows'] = 4;
    $init['textcolor_cols'] = 6;

    return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');


//Removed custom colors option on wysiwyg
function wpse_tiny_mce_remove_custom_colors( $plugins ) {

    foreach ( $plugins as $key => $plugin_name ) {
        if ( 'colorpicker' === $plugin_name ) {
            unset( $plugins[ $key ] );
            return $plugins;
        }
    }

    return $plugins;
}

add_filter( 'tiny_mce_plugins', 'wpse_tiny_mce_remove_custom_colors' );



function posit_admin_style() {
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri().'/assets/css/wordpress-cms/app.css');
}
add_action('admin_enqueue_scripts', 'posit_admin_style');