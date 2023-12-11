<?php

namespace MarkdownImporter\Traits;

require_once get_theme_file_path('/importer/classes/helpers/MarkdownFields.php');

use Illuminate\Support\Str;
use MarkdownImporter\Helpers\MarkdownFields as Fields;

trait Utilities
{
    public function arrayGet(string $key, array $array, $default = null)
    {
        return key_exists($key, $array) ? $array[$key] : $default;
    }

    private function toArray(&$target): array
    {
        if (!$target) $target = [];
        return is_array($target) ? $target : [$target];
    }

    public function setFeaturedImage(string $fp, string $title, string $altText, int $postID): ?int
    {
        $attachmentID = null;
        $filename = basename($fp);
        $fileContents = file_get_contents($fp);
        $upload = wp_upload_bits($filename, null, $fileContents);

        if (!$upload['error']) {
            $wp_filetype = wp_check_filetype($filename);

            $attachment = [
                'post_content' => '',
                'post_parent' => $postID,
                'post_status' => 'inherit',
                'post_title' => "{$title}__thumbnail",
                'post_mime_type' => $wp_filetype['type'],
            ];
            $attachmentID = wp_insert_attachment($attachment, $upload['file'], $postID);

            if (!is_wp_error($attachmentID)) {
                // Include image.php
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                // Define attachment metadata
                $attachmentData = wp_generate_attachment_metadata($attachmentID, $upload['file']);

                wp_update_attachment_metadata($attachmentID, $attachmentData);
                update_post_meta($attachmentID, '_wp_attachment_image_alt', $altText);
                set_post_thumbnail($postID, $attachmentID);
            }
        }
        return $attachmentID;
    }

    protected function serializeMdHeaders(array $postData, ?string $featuredImage = null): array
    {
        $data = ['post_content' => ''];
        $fields = Fields::get_mapped_fields();

        foreach ($fields as $wpField => $meta) {
            $key = $meta['key'];
            $def = $meta['default'];
            $data[$wpField] = $this->arrayGet($key, $postData, $def);

            if (is_bool($def)) {
                $data[$wpField] = !!$data[$wpField];
            }
            if (is_array($def)) {
                $data[$wpField] = $this->toArray($data[$wpField]);
            }
            if (is_string($def)) {
                $data[$wpField] = $data[$wpField] ? strval($data[$wpField]) : '';
            }
        }

        if ($featuredImage) {
            $data['thumbnail'] = [
                'image' => $featuredImage,
                'alt_text' => $postData['alttext'] ?? ''
            ];
        }
        // If the MD file doesn't have a slug, but it has a URL,
        // clean the value and assign it as the Fields::WP_POST_SLUG ('post_name').
        if (!$data[Fields::WP_POST_SLUG] && $data[Fields::MD_URL]) {
            $url = trim($data[Fields::MD_URL], " \t\n\r\0\x0B\/");
            $url = explode('/', $url);
            $data[Fields::WP_POST_SLUG] = end($url);
            $data[Fields::WP_POST_SLUG] = Str::slug($data[Fields::WP_POST_SLUG]);
        }

        return $data;
    }

    private function getFileFromFolder(string $path, string $name, array $allowedTypes = []): ?string
    {
        $match = null;
        $files = @scandir($path) ?: [];
        $extensions = implode('|', $allowedTypes);

        foreach ($files as $file) {
            $lcFile = strtolower($file);
            preg_match("/^$name\.($extensions)$/", $lcFile, $matches);

            if (count($matches)) {
                $match = "{$path}/{$file}";
                break;
            }
        }

        return $match;
    }

    public function createVideoEmbeddedScript(string $id, string $type = 'wistia'): ?string
    {
        $embedded = '';

        switch ($type) {
            case 'youtube':
                $embedded = "<div class='youtube-video-container'><iframe src='https://www.youtube.com/embed/{$id}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
                break;
            case 'wistia':
                $embedded = "<script src='https://fast.wistia.com/embed/medias/{$id}.jsonp' async></script><script src='https://fast.wistia.com/assets/external/E-v1.js' async></script><div class='wistia_responsive_padding' style='padding:56.25% 0 0 0;position:relative;'><div class='wistia_responsive_wrapper' style='height:100%;left:0;position:absolute;top:0;width:100%;'><div class='wistia_embed wistia_async_{$id}' videoFoam=true' style='height:100%;position:relative;width:100%'><div class='wistia_swatch' style='height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;'><img src='https://fast.wistia.com/embed/medias/{$id}/swatch' style='filter:blur(5px);height:100%;object-fit:contain;width:100%;' alt='' aria-hidden='true' onload='this.parentNode.style.opacity=1;' /></div></div></div></div>";
                break;
            case 'vimeo':
                $embedded = "<div class='youtube-video-container'><iframe src='https://www.youtube.com/embed/{$id}' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></div>";
        }
        return $embedded;
    }
}