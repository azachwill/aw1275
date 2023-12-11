<?php

namespace MarkdownImporter\Core;

require_once 'Handler.php';
require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');

use MarkdownImporter\Helpers\MarkdownPost;

class ReleaseNotes extends Handler
{

    protected function createPost(MarkdownPost $post): ?int
    {
        // TODO: Implement createPost() method.
        return 0;
    }

    public function import($slugs = [], $dryRun = false): array
    {
        // TODO: Implement import() method.
        return [];
    }
}