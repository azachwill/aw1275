<?php

require_once get_theme_file_path('/importer/classes/MarkdownImporter.php');
use MarkdownImporter\MarkdownImporter;

function import_markdown_file(): void
{
    $postType = $_POST['postType'] ?? 'post';
    $dryRun = isset($_POST['dryRun']) && $_POST['dryRun'] === 'true';
    $slugs = (isset($_POST['slugs']) && is_array($_POST['slugs'])) ? $_POST['slugs'] : [];

    $nonce = sanitize_text_field($_POST['nonce']);

    if (!wp_verify_nonce($nonce, 'my-ajax-nonce')) {
        wp_send_json_error();
    }

    $importer = new MarkdownImporter($postType);
    $posts = ($importer)->import($slugs, $dryRun);
    wp_send_json_success($posts);
}

add_action('wp_ajax_import_markdown_file', 'import_markdown_file');