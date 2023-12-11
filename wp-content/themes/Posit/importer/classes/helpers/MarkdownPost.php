<?php

namespace MarkdownImporter\Helpers;

require_once get_theme_file_path('/importer/traits/Utilities.php');
require_once get_theme_file_path('/vendor/erusev/parsedown/Parsedown.php');

use Parsedown;
use Symfony\Component\Yaml\Yaml;
use MarkdownImporter\Traits\Utilities;

class MarkdownPost
{
    const RENDER_TYPES = ['html'];
    const MD_TYPES = ['md', 'qmd', 'rmd', 'html'];
    const THUMBNAIL_TYPES = ['png', 'jpg', 'jpeg'];

    protected string $filePath;
    protected ?string $htmlFilePath;

    public array $headers;
    public array $markdownSections;
    public ?string $body;
    public ?string $plainBody;
    public ?string $videoEmbed;
    public ?string $rawContents;

    use Utilities;

    public function __construct(string $fp, ?string $htmlFp = null)
    {
        $this->filePath = $fp;
        $this->htmlFilePath = $htmlFp;
        $this->init();
    }

    public function __get($varName)
    {
        return $this->headers[$varName] ?? $this->$varName;
    }

    public function hasRenderedHtml(): bool
    {
        return $this->htmlFilePath && !!$this->getIndexHtmlFilePath();
    }

    public function isValid(): bool
    {
        return count($this->headers)
            && !empty($this->headers['post_title'])
            && !empty($this->headers['post_name']);
    }

    public function getVideoID(): ?string
    {
        return $this->headers['wistiaid'] ?: $this->headers['youtubeid'] ?: $this->headers['vimeoid'];
    }

    public function getVideoType(): ?string
    {
        return $this->headers['wistiaid']
            ? 'wistia'
            : ($this->headers['youtubeid']
                ? 'youtube'
                : ($this->headers['vimeoid'] ? 'vimeo' : null)
            );
    }

    public function hasVideo(): bool
    {
        return !!$this->getVideoID();
    }

    private function init()
    {
        $this->rawContents = $this->getRawMarkdown();
        $this->markdownSections = $this->getMarkdownSections();

        $this->plainBody = $this->getBody();
        $this->headers = $this->getHeaders();
        $this->body = $this->getBody(false);

        $this->videoEmbed = $this->hasVideo()
            ? $this->createVideoEmbeddedScript($this->getVideoID(), $this->getVideoType())
            : null;
    }

    private function getIndexMdFilePath(): ?string
    {
        return $this->getFileFromFolder($this->filePath, 'index', self::MD_TYPES);
    }

    private function getIndexHtmlFilePath(): ?string
    {
        return $this->getFileFromFolder($this->htmlFilePath, 'index', self::RENDER_TYPES);
    }

    private function getPostThumbnailPath(): ?string
    {
        return $this->getFileFromFolder($this->filePath, 'thumbnail', self::THUMBNAIL_TYPES);
    }

    private function getMarkdownSections(): array
    {
        $headers = '';
        $delimiters = '/---(.*?)---/s';
        /* Match content in yaml at the top of the file */
        preg_match($delimiters, $this->rawContents, $matches);

        if (count($matches)) {
            $match = $matches[0];
            $headers = trim($match, '-');
        }
        /* Extract the post body by removing the header from the content */
        $body = str_replace($headers, '', $this->rawContents);
        $body = trim($body);
        return compact('headers', 'body');
    }

    private function getRawMarkdownHeaders(): string
    {
        return $this->markdownSections['headers'];
    }

    private function getRawMarkdownBody(): string
    {
        return $this->markdownSections['body'];
    }

    private function getBody(bool $plain = true): ?string
    {
        $output = null;

        try {
            if ($this->rawContents) {
                $parser = new Parsedown();
                $contents = $this->getRawMarkdownBody();
                $output = $parser->parse($contents);

                if ($plain) {
                    $output = strip_tags($output);
                    $output = preg_replace('/\s+/', ' ', $output);
                    $output = preg_replace('/<[^>]*>/', '', $output);
                    $output = trim($output);
                }
            }
        } catch (\Exception $exception) {
            // @TODO: Handle exception
        }

        return $output;
    }

    private function getHeaders(): array
    {
        $parsed = [];
        $featuredImage = $this->getPostThumbnailPath();

        if ($this->rawContents) {
            $headers = $this->getRawMarkdownHeaders();

            if ($headers) {
                try {
                    $parsed = Yaml::parse($headers);
                    $parsed = $this->serializeMdHeaders($parsed, $featuredImage);
                } catch (\Exception $e) {
                    // @TODO: Handle exception
                }
            }
        }
        return $parsed;
    }

    private function getRawMarkdown(): ?string
    {
        $srcFile = $this->getIndexMdFilePath();
        return $srcFile ? (@file_get_contents($srcFile) ?: '') : '';
    }
}