<?php

require_once get_theme_file_path('/importer/classes/MarkdownImporter.php');
use MarkdownImporter\MarkdownImporter;


function add_import_posts_button()
{
    global $current_screen;
    $allowed = MarkdownImporter::isAllowedPostType($current_screen->post_type);

    if (!$allowed) {
        return;
    }
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            const $importBtn = $(`
                <button title="Markdown Posts" class="page-title-action" data-open-md-import-modal>
                    Import Markdown
                </button>
            `)
            $importBtn.insertAfter('.wrap .page-title-action')
        })
    </script>
    <?php
}

add_action('admin_head-edit.php', 'add_import_posts_button');

function add_modal_to_footer()
{
    global $current_screen;
    $postType = $current_screen->post_type;
    $allowed = MarkdownImporter::isAllowedPostType($postType);

    if (!$allowed) {
        return;
    }
    $modal = get_theme_file_path('/importer/views/modal.php');
    echo view($modal, compact('postType'));
}

add_action('admin_footer', 'add_modal_to_footer');