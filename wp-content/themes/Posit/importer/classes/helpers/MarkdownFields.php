<?php

namespace MarkdownImporter\Helpers;

class MarkdownFields
{
    const MD_DATE = 'date';
    const MD_TAGS = 'tags';
    const MD_SLUG = 'slug';
    const MD_TITLE = 'title';
    const MD_EVENTS = 'events';
    const MD_AUTHORS = 'authors';
    const MD_DESCRIPTION = 'description';
    const MD_CATEGORIES = 'blogcategories';

    //Videos
    const MD_URL = 'url';
    const MD_DRAFT = 'draft';
    const MD_VIMEO_ID = 'vimeoid';
    const MD_WISTIA_ID = 'wistiaid';
    const MD_YOUTUBE_ID = 'youtubeid';
    const MD_COLLECTIONS = 'collections';
    const MD_HIDE_FROM_LIST = 'hidefromlist';

    const WP_POST_TAGS = 'tags';
    const WP_POST_DATE = 'post_date';
    const WP_POST_SLUG = 'post_name';
    const WP_POST_AUTHORS = 'authors';
    const WP_POST_TITLE = 'post_title';
    const WP_POST_CATEGORIES = 'categories';
    const WP_POST_DESCRIPTION = 'post_excerpt';
    const WP_POST_STATUS = 'post_status';

    public static function get_mapped_fields(): array
    {
        return [
            self::WP_POST_DATE => [
                'default' => null,
                'key' => self::MD_DATE,
            ],
            self::WP_POST_TAGS => [
                'default' => [],
                'key' => self::MD_TAGS,
            ],
            self::WP_POST_SLUG => [
                'key' => self::MD_SLUG,
                'default' => ''
            ],
            self::WP_POST_TITLE => [
                'default' => null,
                'key' => self::MD_TITLE,
            ],
            self::WP_POST_AUTHORS => [
                'default' => [],
                'key' => self::MD_AUTHORS,
            ],
            self::WP_POST_CATEGORIES => [
                'default' => [],
                'key' => self::MD_CATEGORIES,
            ],
            self::WP_POST_DESCRIPTION => [
                'default' => '',
                'key' => self::MD_DESCRIPTION,
            ],
            self::MD_EVENTS => [
                'default' => [],
                'key' => self::MD_EVENTS,
            ],
            self::MD_WISTIA_ID => [
                'default' => null,
                'key' => self::MD_WISTIA_ID,
            ],
            self::MD_DRAFT => [
                'default' => false,
                'key' => self::MD_DRAFT,
            ],
            self::MD_YOUTUBE_ID => [
                'default' => null,
                'key' => self::MD_YOUTUBE_ID,
            ],
            self::MD_VIMEO_ID => [
                'default' => null,
                'key' => self::MD_VIMEO_ID,
            ],
            self::MD_HIDE_FROM_LIST => [
                'default' => false,
                'key' => self::MD_HIDE_FROM_LIST,
            ],
            self::MD_URL => [
                'default' => null,
                'key' => self::MD_URL,
            ],
            self::MD_COLLECTIONS => [
                'default' => [],
                'key' => self::MD_COLLECTIONS,
            ],
        ];
    }
}