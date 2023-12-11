<?php

namespace MarkdownImporter\Core;

require_once 'Handler.php';
require_once get_theme_file_path('/importer/traits/Utilities.php');
require_once get_theme_file_path('/importer/traits/MarkdownAuthors.php');
require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');

use Illuminate\Support\Str;
use Symfony\Component\Yaml\Yaml;
use MarkdownImporter\Traits\Utilities;
use MarkdownImporter\Helpers\MarkdownPost;
use MarkdownImporter\Traits\MarkdownAuthors;

class Speakers extends Handler
{
    /**
     * This class contains the logic for importing speakers from md/yaml files originally located in the
     * rstudio.com repository. Although the authors have been imported at this point, this feature will remain active
     * in case it's ever necessary. It takes into account the following criteria:
     *
     * Expected File Types: yaml, yml.
     * Expected Fields:
     *  - Mandatory:
     *      - name [str]: Author's full name
     *      - firstname [str]: Author's first name (if name field is not present)
     *      - lastname [str]: Author's last name (if name field is not present)
     *  - Optional:
     *      - photo [str]: Image file name
     *      - bio [str]: Author's bio
     *      - job [str]: Author's job title
     *      - title [str]: Author's job title (if job field is not present)
     *      - linkedin [str]: Author's linkedin profile url
     *      - twitter [str]: Author's twitter profile url
     *      - github [str]: Author's github profile url
     *      - facebook [str]: Author's facebook profile url
     *      - email [str]: Author's email
     *      - website [str]: Author's website url
     *
     * NOTES:
     *  - Social media icons are mapped from their keyword in `SM_NAMES`
     *  - Regardless of the extension, the files to import should have a valid yaml format content
     *  - All profile pics must live in the "markdown-authors/media/" folder
     *  - The post slug or `post_name` is mapped based on the file name.
     */

    const POST_TYPE = 'speakers';
    const DEF_POST_STATUS = 'publish';

    const SM_NAMES = [
        'email' => 3965,
        'github' => 2596,
        'twitter' => 2601,
        'website' => 2602,
        'linkedin' => 2598,
    ];

    private array $headers;
    protected string $mediaFolder = 'speakers';

    private string $bioACFKey = 'field_633f23b9b1a18';
    private string $smlACFKey = 'field_630e75033ad95';
    private string $roleACFKey = 'field_630e74ff3ad94';
    private string $smlUrlACFKey = 'field_630e75273ad97';
    private string $smlIconACFKey = 'field_630e75193ad96';

    use Utilities;
    use MarkdownAuthors;

    public function __construct()
    {
        $baseDir = get_template_directory();
        $this->headers = [
            'post_content' => '',
            'post_type' => self::POST_TYPE,
            'post_status' => self::DEF_POST_STATUS,
        ];

        parent::__construct(
            self::POST_TYPE,
            "{$baseDir}/markdown-authors",
        );
    }

    private function serializeAuthor(array $data, string $srcFileName): array
    {
        $image = $data['photo'] ?? $data['image'];
        $slug = explode('.', $srcFileName)[0];

        $serialized = array_merge($this->headers, [
            'post_name' => Str::slug($slug),
            'post_title' => $data['name']
                ?? "{$data['firstname']} {$data['lastname']}",
            'social_media' => [],
            'bio' => $data['bio'] ?? '',
            'post_excerpt' => $data['bio'] ?? '',
            'role' => $data['job'] ?: $data['title'] ?: '',
        ]);

        if ($image && is_string($image)) {
            $image = trim($image);
            $image = explode('/', $image);
            $image = $this->markdownDir . '/media/' . end($image);

            if (file_exists($image) && file_is_valid_image($image)) {
                $serialized['thumbnail'] = [
                    'image' => $image,
                    'alt_text' => "Profile picture of {$serialized['post_title']}",
                ];
            }
        }

        foreach (self::SM_NAMES as $sm => $iconID) {
            $exists = isset($data[$sm]);
            $isNotNull = $exists && !is_null($data[$sm]);

            if ($isNotNull) {
                $urlPrefix = $sm === 'email' ? 'mailto:' : '';
                $serialized['social_media'][] = [
                    $this->smlIconACFKey => $iconID,
                    $this->smlUrlACFKey => $urlPrefix . $data[$sm],
                ];
            }
        }
        ksort($serialized['social_media']);
        return $serialized;
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
                $filePath = "{$this->markdownDir}/{$slug}";
                $fileContents = @file_get_contents($filePath) ?? null;

                $metadata = Yaml::parse($fileContents);
                $post = new MarkdownPost($filePath);
                $post->headers = $this->serializeAuthor($metadata, $slug);

                $posts[] = $post;
            } catch (\Throwable $exception) {
                // @TODO: Handle error
            }
        }
        return $posts;
    }

    protected function createPost(MarkdownPost $post): ?int
    {
        $postID = null;

        try {
            $postID = $this->preSavePost($post, $this->headers);

            $this->getOrCreatePostAuthors([], $postID);
            update_field($this->bioACFKey, $post->bio, $postID);
            update_field($this->roleACFKey, $post->role, $postID);

            foreach ($post->social_media as $row) {
                add_row($this->smlACFKey, $row, $postID);
            }
        } catch (\Throwable $e) {
            var_dump($e->getMessage(), $post->post_title);
        }

        return $postID;
    }
}