@extends('master')

@php
    $content = get_field('content_404', 'options');
@endphp

@section('content')
    <section class="404">
        @include('components.hero', [
            'header' => $content['hero']['header'],
            'heroImage' => $content['hero']['image'],
            'imagePosition' => $content['hero']['image_position'],
            'addLottie' => $content['hero']['add_lottie'],
            'lottieFile' => $content['hero']['lottie_file'],
            'lottieOptions' => $content['hero']['lottie_options']
        ])
        @include('components.links-404', [
            'header' => $content['links_404']['hero']['header'],
            'links' => $content['links_404']['links']
        ])
    </section>
@endsection