@extends('master')

@section('content')

    @php
        $hero = get_field('hero');
        $postsPerPage = get_field('posts_per_page');
        $contactBanner = get_field('contact_banner');
    @endphp

    <section class="section-cheatsheets cheatsheets share-modal-parent">
        @include('components.hero', [
            'header' => $hero['header'],
            'heroImage' => $hero['image'],
            'video' => $hero['video'],
            'imagePosition' => $hero['image_position'],
            'addLottie' => $hero['add_lottie'],
            'lottieFile' => $hero['lottie_file'],
            'lottieOptions' => $hero['lottie_options']
        ])

        @include('components.resources.cheatsheets', [
            'postsPerPage' => $postsPerPage,
        ])

        @include('components.banner', [
            'title' => $contactBanner['title'],
            'titleStylesData' => $contactBanner['title_styles'],
            'headingTag' => $contactBanner['heading_tag'],
            'description' => $contactBanner['description'],
            'descriptionStylesData' => $contactBanner['description_styles'],
            'cta' => $contactBanner['cta'],
            'attributes' => $contactBanner['attributes'],
            'background' => $contactBanner['background'],
            'media' => $contactBanner['media'],
            'sectionOptions' => $contactBanner['section_options']
        ])

        @include('partials.share-modal')
    </section>
@endsection
