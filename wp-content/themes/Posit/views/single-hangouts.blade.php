@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $serializeHangout = serializePost(get_post());
            $addCards = get_field('add_cards', 'options');
            $slidingCards = get_field('sliding_cards', 'options');
            $contactBannerGroup = get_field('hangout_contact_banner', 'options');
        @endphp

        @include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray(get_post(), 'hangout')])

        <section class="single-hangouts">
            @include('components.hangout-detail.hangout-detail-hero', [
                'hangout' => $serializeHangout
            ])

            @if($serializeHangout['customData']['status'] === 'past' && $serializeHangout['customData']['episode_notes'])
                @include('components.hangout-detail.hangout-episode-notes', [
                    'episodeNotes' => $serializeHangout['customData']['episode_notes']
                ])
            @endif

            @include('components.hangout-detail.hangout-featured', [
                'hangoutData' => $serializeHangout['customData']
            ])

            @if($addCards && $slidingCards)
                @include('components.sliding-cards', [
                    'title' => $slidingCards['sliding_title'],
                    'content' => $slidingCards['content'],
                    'contentCards' => $slidingCards['cards'],
                    'posts' => $slidingCards['posts']
                ])
            @endif

            @if($contactBannerGroup['show_contact_banner'] && $contactBannerGroup['banner_info'])
                @include('components.banner', $contactBannerGroup['banner_info'])
            @endif
        </section>
    @endwhile
@endsection
