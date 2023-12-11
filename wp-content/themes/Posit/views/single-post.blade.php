@php
    require_once get_theme_file_path('/importer/classes/helpers/MarkdownPost.php');
    use \MarkdownImporter\Helpers\MarkdownPost;

    $meta = [];
    $post = get_post();
    $overridesContent = get_field('use_native_wp_content', $post->ID);
    $contactBannerGroup = get_field('posts_contact_banner', 'options');

    $serializedPost = serializePost($post);
    $authors = $serializedPost['customData']['authors'] ?? [];

    if (!$overridesContent) {
        $baseDir = get_template_directory();
        $markdownDir = "{$baseDir}/markdown-blogs";
        $mdPost = new MarkdownPost("{$markdownDir}/{$post->post_name}");
        $meta['postContent'] = $mdPost->plainBody;

        $htmlSource = getRenderedBlogPost($post->post_name, true);
    }
@endphp

@extends('master', $meta)

@section('content')
    @include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray($post)])

    <section class="post-content">
        @if($overridesContent)
            @include('components.resources.resource-detail-hero', [
                'isBlog' => true,
                'isVideo' => false,
                'post' => $serializedPost
            ])
            @include('components.resources.resource-post-content', [
                'postContent' => $serializedPost['customData']['post_content'],
                'postTags' => $serializedPost['tags']
            ])
        @else
             @include('components.resources.resource-detail-hero', [
                'isBlog' => true,
                'isVideo' => false,
                'post' => $serializedPost,
            ])
            <div class="container space-between-sections github-rendered-post">
                <iframe
                    data-rendered-html
                    src="{{ $htmlSource }}"
                    id="{{ $post->post_name }}"
                    class="w-[100%] grid grid-cols-12"
                    title="{{ $post->post_name }} post content">
                </iframe>
                <div class="grid grid-cols-12">
                    <div class="col-span-8 col-start-3">
                        @include('partials.post-tags', [
                            'postTags' => $serializedPost['tags'],
                            'iframe' => true,
                            'type' => 'post'
                        ])
                    </div>
                </div>
            </div>
        @endif
    </section>

    @if (isset($authors) && is_array($authors) && !empty($authors))
        <section class="authors-information space-between-sections">
            <div class="container grid grid-cols-12 gap-x-[28px]">
                <div class="col-span-12 lg:col-span-10 lg:col-start-2 [&:not(:first-child)]:mt-[80px]">
                    @foreach($authors as $key => $author)
                        @include('components.hangout-detail.card-hangout-featured', [
                            'isHost' => false,
                            'speaker' => serializePost($author),
                        ])
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($contactBannerGroup['show_banner'] && $contactBannerGroup['banner_info'])
        <section class="post-footer">
            @include('components.banner', $contactBannerGroup['banner_info'])
        </section>
    @endif

@endsection
