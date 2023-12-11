<?php

function enqueue_import_markdown_scripts($hook)
{
    $baseUri = get_theme_file_uri();
    $editHook = 'edit.php';
    $handle = 'markdown_importer';
    $cssSrc = "{$baseUri}/importer/assets/app.css";
    $scriptSrc = "{$baseUri}/importer/assets/app.js";

    if ($hook !== $editHook) {
        return;
    }

    wp_enqueue_style($handle, $cssSrc);
    wp_enqueue_script($handle, $scriptSrc, ['wp-util', 'jquery'], null, true);

    wp_localize_script($handle, 'ajaxUrl', [
        'action' => 'import_markdown_file',
        'url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('my-ajax-nonce'),
    ]);
}

add_action('admin_enqueue_scripts', 'enqueue_import_markdown_scripts');