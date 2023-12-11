@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $post = get_post();
            $serializeVideo = serializePost($post);
            $contactBannerGroup = get_field('video_contact_banner', 'options');
        @endphp

        @include('partials.breadcrumbs', ['pages'=>  getBreadcrumbArray($post,'video')])

        <section class="single-videos">
            @include('components.resources.resource-detail-hero', [
                'post' => $serializeVideo,
            ])
            <div class="container space-between-sections grid grid-cols-12 gap-x-[28px]">
                <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                    @if(!empty($serializeVideo['customData']['content']))
                        @foreach($serializeVideo['customData']['content'] as $key => $item)
                            <div id="single-video-{{$key}}">
                                <div>
                                    <h2 class="h3 text-blue1">
                                        {{ $item['title'] }}
                                    </h2>
                                </div>
                                <div class="mt-[40px] wysiwyg-content body-md-regular text-blue1">
                                    {!! $item['description'] !!}
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                @if(!empty($serializeVideo['tags']))
                    <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                        @include('partials.post-tags', [
                            'postTags' => $serializeVideo['tags'],
                            'iframe' => false,
                            'type' => 'video'
                        ])
                    </div>
                @endif
                <div class="col-span-12 lg:col-span-8 lg:col-start-3 mt-[80px]">
                    @if(!empty($serializeVideo['customData']['authors']))
                        @foreach($serializeVideo['customData']['authors'] as $key => $author)
                            @include('components.hangout-detail.card-hangout-featured', [
                                'speaker' => serializePost($author),
                                'isHost' => false
                            ])
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        @if($contactBannerGroup['show_banner'] && $contactBannerGroup['banner_info'])
            @include('components.banner', $contactBannerGroup['banner_info'])
        @endif
    @endwhile
@endsection
