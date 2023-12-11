<?php

namespace MarkdownImporter;

require_once get_theme_file_path('/importer/classes/core/Videos.php');
require_once get_theme_file_path('/importer/classes/core/Speakers.php');
require_once get_theme_file_path('/importer/classes/core/BlogPosts.php');
require_once get_theme_file_path('/importer/classes/core/ReleaseNotes.php');

use MarkdownImporter\Core\Videos;
use MarkdownImporter\Core\Speakers;
use MarkdownImporter\Core\BlogPosts;
use MarkdownImporter\Core\ReleaseNotes;

class MarkdownImporter
{
    const POSTS = 'post';
    const VIDEOS = 'videos';
    const SPEAKERS = 'speakers';
    const RELEASE_NOTES = 'release_notes';

    const ALLOWED_POST_TYPES = [self::POSTS, self::VIDEOS, self::RELEASE_NOTES, self::SPEAKERS];

    private string $postType;

    public function __construct(string $postType = self::POSTS)
    {
        $this->postType = $postType;
    }

    public static function isAllowedPostType(string $postType): bool
    {
        return in_array($postType, self::ALLOWED_POST_TYPES);
    }

    private function importVideos(array $slugs = [], bool $dryRun = false): array {
        $videos = new Videos();
        return $videos->import($slugs, $dryRun);
    }

    private function importBlogPosts(array $slugs = [], bool $dryRun = false): array {
        $markdownBlog = new BlogPosts();
        return $markdownBlog->import($slugs, $dryRun);
    }

    private function importSpeakers(array $slugs = [], bool $dryRun = false): array {
        $markdownBlog = new Speakers();
        return $markdownBlog->import($slugs, $dryRun);
    }

    private function importReleaseNotes(array $slugs = [], bool $dryRun = false): array {
        return [];
    }

    public function import(array $slugs = [], bool $dryRun = false): array
    {
        $imported = [];
        switch ($this->postType) {
            case self::POSTS:
                $imported = $this->importBlogPosts($slugs, $dryRun);
                break;
            case self::VIDEOS:
                $imported = $this->importVideos($slugs, $dryRun);
                break;
            case self::RELEASE_NOTES;
                $imported = $this->importReleaseNotes($slugs, $dryRun);
                break;
            case self::SPEAKERS;
                $imported = $this->importSpeakers($slugs, $dryRun);
                break;
        }
        return $imported;
    }
}