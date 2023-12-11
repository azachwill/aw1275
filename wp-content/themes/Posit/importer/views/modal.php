<?php

require_once get_theme_file_path('/importer/classes/MarkdownImporter.php');
use MarkdownImporter\MarkdownImporter;

$postType = $postType ?? 'post';
?>

<div class="markdown-import-modal" style="display: none;" data-markdown-import-modal data-post-type="<?= $postType ?>">
    <div class="modal-content">
        <div class="modal-heading">
            <h5>Markdown Posts</h5>
            <button
                    data-close-modal
                    type="button"
                    class="close-modal-button"
            >
                x
            </button>
        </div>

        <div class="modal-body">
            <p>
                Import any markdown <?= $postType ?> that have a valid structure
                <?= $postType === MarkdownImporter::POSTS ? 'and a pre-rendered html.' : '.' ?>
                You can import them individually or all at once as long as they appear in the list below.
            </p>
            <div class="select-all" style="display: none">
                <div class="counter">
                    Count: <span data-posts-count></span>
                </div>
                <label>
                    <span>Select All</span>
                    <input type="checkbox" data-select-all>
                </label>
            </div>
            <ul data-posts-container></ul>
        </div>

        <div class="modal-actions" style="display: none">
            <button data-import-selected
                    type="button"
                    class="button button-secondary button-large"
            >
                Import Selected
            </button>

            <button data-import-all
                    type="button"
                    class="button button-primary button-large"
            >
                Import All
            </button>
        </div>
    </div>
</div>
