<?php

namespace MarkdownImporter\Core;

require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');

use MarkdownImporter\Traits\Utilities;
use FileBird\Model\Folder as FolderModel;
use MarkdownImporter\Helpers\MarkdownPost;

abstract class Handler
{
    protected string $postType;
    protected string $markdownDir;
    protected ?string $renderedHtmlDir;

    protected int $mediaFolderID;
    protected string $mediaFolder;

    use Utilities;

    public function __construct(string $postType, string $markdownDir, string $renderedHtmlDir = null)
    {
        $this->postType = $postType;
        $this->markdownDir = $markdownDir;
        $this->renderedHtmlDir = $renderedHtmlDir;
    }

    protected function getExistingPosts(bool $flat = true, array $args = []): array
    {
        $query = array_merge([
            'numberposts' => -1,
            'post_type' => $this->postType,
            'post_status' => get_post_stati(),
        ], $args);

        $posts = get_posts($query);

        return array_map(function ($post) use ($flat) {
            return $flat ? $post->post_name : $post;
        }, $posts);
    }

    protected function getMarkdownPosts(): array
    {
        $posts = [];
        $files = scandir($this->markdownDir) ?? [];

        $files = array_filter($files, function ($f) {
            /* Ignore private folders */
            return !starts_with($f, '.');
        });

        foreach ($files as $slug) {
            try {
                $htmlFp = $this->renderedHtmlDir
                    ? "{$this->renderedHtmlDir}/{$slug}"
                    : null;
                $post = new MarkdownPost("{$this->markdownDir}/{$slug}", $htmlFp);
                /* We say a markdown blog can be imported if we're able to fetch data from
                 * their respective md, Rmd or qmd file, and we have an existing html that we can render as its content
                 * */
                $canBeImported = $post->isValid();
                if ($htmlFp) $canBeImported &= $post->hasRenderedHtml();

                if ($canBeImported) {
                    $posts[] = $post;
                }
            } catch (\Throwable $exception) {
                // @TODO: Handle error
            }
        }
        return $posts;
    }

    protected function getImportableMDPosts(): array
    {
        $slugs = [];
        $mdPosts = $this->getMarkdownPosts();

        foreach ($mdPosts as $mdPost) {
            $slugs[] = strtolower($mdPost->post_name);
        }
        $args = ['post_name__in' => $slugs];
        $existingPosts = $this->getExistingPosts(true, $args);

        return array_filter($mdPosts, function ($post) use ($existingPosts) {
            return !in_array(strtolower($post->post_name), $existingPosts);
        });
    }

    public function import($slugs = [], $dryRun = false): array
    {
        $posts = [];
        $filterSlugs = !!count($slugs);
        $mdPosts = $this->getImportableMDPosts();

        $count = 0;
        $limit = 25;

        if (!$dryRun && $this->mediaFolder) {
            /* Get or create a blog category for the blog featured images */
            $mediaRoot = 0;
            $this->mediaFolderID = FolderModel::newOrGet($this->mediaFolder, $mediaRoot);
        }

        foreach ($mdPosts as $mdPost) {
            $skip = $filterSlugs && !in_array($mdPost->post_name, $slugs);
            $draft = !is_array($mdPost->headers['draft']) && $mdPost->headers['draft'];
            $hideFromList = !is_array($mdPost->headers['hidefromlist']) && $mdPost->headers['hidefromlist'];

            if ($skip || $draft || $hideFromList) {
                continue;
            }
            else if ($dryRun) {
                $posts[] = $mdPost->headers;
            }
            else if ($postID = $this->createPost($mdPost)) {
                $posts[] = $postID;
            }

            $count += 1;
            if ($count >= $limit) break;
        }
        return $posts;
    }


    protected function preSavePost(MarkdownPost $post, array $headers = []): ?int
    {
        $attachmentID = null;
        $post->headers = array_merge($post->headers, $headers);
        $postID = wp_insert_post($post->headers, true);

        if ($postID !== 0
            && $post->thumbnail
            && is_array($post->thumbnail)
        ) {
            $imgTitle = $post->post_name;
            $image = $post->thumbnail['image'];
            $altText = $post->thumbnail['alt_text'];
            $attachmentID = $this->setFeaturedImage($image, $imgTitle, $altText, $postID);
        }

        if ($this->mediaFolderID && $attachmentID) {
            FolderModel::setFoldersForPosts($attachmentID, [$this->mediaFolderID]);
        }

        return $postID;
    }

    protected abstract function createPost(MarkdownPost $post): ?int;
}