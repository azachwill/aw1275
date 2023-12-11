@php
    $meta = [];
    $post = get_post();
    $contactBannerGroup = get_field('analyst_reports_contact_banner', 'options');

    $serializedPost = serializePost($post);
@endphp

@extends('master', $meta)

@section('content')
    @include('partials.breadcrumbs', ['pages' => getBreadcrumbArray($post, 'analyst_reports')])

    <section class="analyst-reports-content">
        @include('components.resources.resource-detail-hero', [
            'isVideo' => false,
            'post' => $serializedPost
        ])
        @include('components.resources.resource-post-content', [
            'postContent' => $serializedPost['customData']
        ])
        
         @if($contactBannerGroup['show_banner'] && $contactBannerGroup['banner_info'])
             @include('components.banner', $contactBannerGroup['banner_info'])
         @endif
    </section>

@endsection
