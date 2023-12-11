<?php

namespace MarkdownImporter\Core;

require_once 'Handler.php';
require_once get_theme_file_path('/importer/traits/Utilities.php');
require_once get_theme_file_path('/importer/traits/MarkdownAuthors.php');
require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');

use MarkdownImporter\Traits\Utilities;
use MarkdownImporter\Helpers\MarkdownPost;
use MarkdownImporter\Traits\MarkdownAuthors;

class BlogPosts extends Handler
{
    /**
     * This class contains the logic for importing blog posts from markdown files originally located in the
     * rstudio.com repository. Although the posts have been imported at this point, this feature will remain active
     * to allow for more complex posts rendered using quarto. It takes into account the following criteria:
     *
     * Expected File Types: md, Rmd, qmd, html.
     * Expected File Delimiters: ---
     * Expected Fields:
     *  - Mandatory:
     *      - title [str]
     *      - slug [str]
     *      - url [str] (if slug field is not present)
     *      - date [str]: The post date in yyyy-mm-dd format
     *  - Optional:
     *      - tags [list[str]]: A list of tags the video should have
     *      - description [str]: Post's excerpt or summary
     *      - blogcategories [list[str]]: Post's categories
     *      - authors [list[str]]: A list of authors
     *
     * How to import:
     * To import a post the index file must contain the mandatory fields from above and a quarto html render must exist
     * in the public/<slug> folder. To generate this render you must run `quarto render <the-post-file> --to html`
     * while in the theme's root folder.
     * The quarto html render will be shown within an iframe in the front-end. This enables users to use quarto to its
     * full extent and include dynamic behavior that requires external JS or libraries.
     *
     * NOTES:
     *  - Regardless of the extension, importable files but be named as "index"
     *  - All featured images must live within the post folder and be named as "thumbnail"
     *  - The post slug or `post_name` is mapped based on the folder name as default but is overridden by the slug field
     *  - Once the file is imported, further changes outside the quarto render will have to happen in the CMS.
     *  - Authors will be automatically created with the speakers post type if they don't exist
     *  - Anything below the data scheme delimiters will be parsed to html and stored as the post content
     *  - Post images should live within the post folder
     *  - Quarto configuration is located in the root of the theme
     *
     */

    const POST_TYPE = 'post';

    private array $headers;
    protected string $mediaFolder = 'Blog';
    private string $authorsACFKey = 'field_6320eb7d90311';
    private string $searchableContentACFKey = 'field_6361525fb9282';

    use Utilities;
    use MarkdownAuthors;

    public function __construct()
    {
        $baseDir = get_template_directory();
        $this->headers = [
            'post_status' => 'private',
        ];

        parent::__construct(
            self::POST_TYPE,
            "{$baseDir}/markdown-blogs",
            "{$baseDir}/public/markdown-blogs"
        );
    }

    private function setSearchableIFrameContent(string $iframeContent, int $postID)
    {
        update_field($this->searchableContentACFKey, $iframeContent, $postID);
    }

    protected function createPost(MarkdownPost $post): ?int
    {
        $postID = null;

        try {
            $postID = $this->preSavePost($post, $this->headers);

            wp_set_post_tags($postID, $post->tags ?: []);
            wp_create_categories($post->categories ?: [], $postID);
            $this->getOrCreatePostAuthors($post->authors ?: [], $postID, $this->authorsACFKey);

            $this->setSearchableIFrameContent($post->plainBody, $postID);
        }
        catch (\Exception $e) { var_dump($e->getMessage(), $post->post_title); }
        catch (\Throwable $e) { var_dump($e->getMessage(), $post->post_title); }

        return $postID;
    }
}
