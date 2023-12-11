@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
            $singleConference = serializePost(get_post());
            $postType = strtolower($singleConference['postType']);

            $contactBanner = get_field($postType.'_contact_banner', 'options');

            $singleDetails = $singleConference['customData']['conference_details'];
        @endphp
        <section class="single-conference">

            @include('partials.breadcrumbs', [
                'pages'=>  getBreadcrumbArray(get_post(), $postType)
            ])
            @include('components.hero-with-location', [
                'title' => $singleConference['title'],
                'description' => $singleConference['excerpt'],
                'image' => [
                    'url' => $singleConference['image'],
                    'alt' => $singleConference['imageAlt'],
                ],
                'isSingle' => true
            ])
            @include('components.conference.single-banner', [
                'startDate' => $singleDetails['start_date'],
                'endDate' => $singleDetails['end_date'],
                'startTime' => $singleDetails['start_time'],
                'endTime' => $singleDetails['end_time'],
            ])
            <div class="container space-between-sections grid grid-cols-12 gap-x-[28px]">
                @if(!empty($singleDetails['content']))
                    <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                        <div class="mt-[40px] wysiwyg-content body-md-regular text-blue1">
                            {!! $singleDetails['content'] !!}
                        </div>
                    </div>
                @endif
                @if(!empty($singleDetails['speakers']))
                    <div class="col-span-12 lg:col-span-8 lg:col-start-3 mt-[80px]">
                        @foreach($singleDetails['speakers'] as $key => $speaker)
                            @include('components.hangout-detail.card-hangout-featured', [
                                'speaker' => serializePost($speaker),
                                'isHost' => false
                            ])
                        @endforeach
                    </div>
                @endif
            </div>
        </section>
        @if(!empty($contactBanner))
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
        @endif
    @endwhile
@endsection
