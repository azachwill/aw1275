<?php

namespace MarkdownImporter\Core;

require_once 'Handler.php';
require_once get_theme_file_path('/importer/traits/Utilities.php');
require_once get_theme_file_path('/importer/traits/MarkdownAuthors.php');
require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');

use MarkdownImporter\Traits\Utilities;
use MarkdownImporter\Helpers\MarkdownPost;
use MarkdownImporter\Traits\MarkdownAuthors;
use MarkdownImporter\Helpers\MarkdownFields as Fields;

class Videos extends Handler
{
    /**
     * This class contains the logic for importing videos from markdown files originally located in the
     * rstudio.com repository. Although the videos have been imported at this point, this feature will remain active
     * in case it's ever necessary. It takes into account the following criteria:
     *
     * Expected File Types: md, Rmd, qmd, html.
     * Expected File Delimiters: ---
     * Expected Fields:
     *  - Mandatory:
     *      - title [str]
     *      - slug [str]
     *      - url [str] (if slug field is not present)
     *      - date [str]: The post date in yyyy-mm-dd format
     *      - wistiaid [num]: Post's wistiaid value to render as iframe (if wistiaid is not present)
     *      - vimeoid [num]: Post's vimeoid value to render as iframe (if vimeoid is not present)
     *      - youtubeid [num]: Post's youtubeid value to render as iframe (if youtubeid is not present)
     *  - Optional:
     *      - tags [list[str]]: A list of tags the video should have
     *      - description [str]: Post's excerpt or summary
     *      - blogcategories [list[str]]: Post's categories
     *      - events [list[str]]: Addendum to post's categories
     *      - collections [list[str]]: Addendum to post's categories
     *      - authors [list[str]]: A list of authors
     *
     * NOTES:
     *  - Regardless of the extension, importable files but be named as "index"
     *  - If any of the mandatory fields is not present, the post may be saved as a draft
     *  - All featured images must live within the post folder and be named as "thumbnail"
     *  - The post slug or `post_name` is mapped based on the folder name as default but is overridden by the slug field
     *  - Once the file is imported, further changes will have to happen in the CMS.
     *  - Videos with dates older than 3 years will be marked as archive unless they belong to a rst conference
     *  - Authors will be automatically created with the speakers post type if they don't exist
     *  - Anything below the data scheme delimiters will be parsed to html and stored as the post content
     */

    const POST_TYPE = 'videos';

    private array $headers;
    protected string $mediaFolder = 'Videos';

    private string $videoACFKey = 'field_6333057709a95';
    private string $authorsACFKey = 'field_63330171e784c';
    private string $contentACFKey = 'field_633300cee7848';
    private string $descriptionACFKey = 'field_6333010be784a';

    use Utilities;
    use MarkdownAuthors;

    public function __construct()
    {
        $baseDir = get_template_directory();
        $this->headers = [
            'post_type' => 'videos',
        ];

        parent::__construct(
            self::POST_TYPE,
            "{$baseDir}/markdown-videos",
        );
    }

    private function setAdditionalPostAttributes(MarkdownPost &$post)
    {
        $postDate = strtotime($post->post_date);

        // Map additional MD values to the categories.
        // Doesn't apply to all post types therefore it shouldn't be on the serializer.
        $post->headers[Fields::WP_POST_CATEGORIES] = array_merge(
            $post->headers[Fields::WP_POST_CATEGORIES],
            $this->toArray($post->headers[Fields::MD_EVENTS]),
            $this->toArray($post->headers[Fields::MD_COLLECTIONS]),
        );

        if ($postDate && $post->videoEmbed) {
            $categories = implode(',', $post->categories);
            $hasConfCategory = stripos($categories, 'rstudio::conf') !== false;

            // Set the post as 'archive' if it's older than 3 years AND is not a conference video
            $post->headers[Fields::WP_POST_STATUS] =
                !$hasConfCategory && ($postDate < strtotime('-3 years'))
                    ? 'archive' : 'private';
        } else {
            $post->headers[Fields::WP_POST_STATUS] = 'draft';
        }
    }

    protected function createPost(MarkdownPost $post): ?int
    {
        $postID = null;

        try {
            $this->setAdditionalPostAttributes($post);
            $postID = $this->preSavePost($post, $this->headers);

            wp_set_post_tags($postID, $post->tags ?: []);
            wp_create_categories($post->categories ?: [], $postID);
            $this->getOrCreatePostAuthors($post->authors ?: [], $postID, $this->authorsACFKey);

            if ($post->videoEmbed) update_field($this->videoACFKey, $post->videoEmbed, $postID);

            add_row(
                $this->contentACFKey,
                [$this->descriptionACFKey => $post->body],
                $postID
            );
        }
        catch (\Exception $e) { var_dump($e->getMessage(), $post->post_title); }
        catch (\Throwable $e) { var_dump($e->getMessage(), $post->post_title); }

        return $postID;
    }
}