@php
    $hangoutData = $hangout['customData'];
    $hangoutStatus = $hangoutData['status'];
    $primarySpeaker = serializePost($hangoutData['primary_speaker']);
@endphp

<section class="hangout-detail-hero">
    <div class="container grid grid-cols-12 space-between-sections">
        <div class="col-span-12 lg:col-span-6">
            @if( $hangoutStatus === 'live' )
                <div class="hangout-detail-hero__status w-fit py-[4px] px-[16px] mb-[24px] bg-blue3/20 rounded-lg ui-medium text-blue1 uppercase">
                    live
                </div>
            @endif
            <div class="hangout-detail-hero__date mb-[8px] sh4 text-blue1 uppercase">
                {{ date('d M Y', strtotime($hangoutData['date_and_time'])) }}
            </div>
            <h1 class="hangout-detail-hero__title h2 text-blue1">
                {{ $hangout['title'] }}
            </h1>
            @if ( $hangoutStatus === 'past' && $hangoutData['toggle_speakers'] )
            <p class="hangout-detail-hero__speaker mt-[8px] text-blue4 body-lg-semibold md:text-[28px] lg:text-[32px]">
                {{ $primarySpeaker['title'] }}
            </p>
            @endif
            @if($primarySpeaker['customData'])
                <div class="hangout-detail-hero__speaker-role mt-[8px] text-blue4 body-md-semibold">
                    {{ $primarySpeaker['customData']['role'] }}
                </div>
            @endif
            <div class="hangout-detail-hero__description mt-[24px] text-blue1/[.62] body-lg-regular">
                {{ $hangoutData['primary_talk_description'] }}
            </div>
            <div class="hangout-detail-hero__actions flex mt-[40px]">
                @if ( $hangoutStatus == 'past' && $hangoutData['urls']['video_embed'] )
                    <a role="button" target="_self" class="btn btn-md-primary w-full md:w-fit partner-form-modal-trigger cta-modal-trigger mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0" href="">Watch this hangout</a>

                    <div>
                        @include('components.modal-cta', [
                            'modalContent' => 'hangout-embed', 
                            'theme' => 'light',
                            'modalTitle' => $hangout['title'],
                            'modalDesc' => $hangoutData['primary_talk_description'],
                            'modalVideoEmbed' => $hangoutData['urls']['video_embed'],
                        ])
                    </div>
                @else
                    <a role="button" target="_self" class="btn btn-md-primary w-full md:w-fit {{$hangoutStatus === 'past' && !$hangoutData['urls']['video_embed'] ? 'disabled' : ''}}"
                        href="{{$hangoutStatus === 'upcoming'
                        ? ($hangoutData['urls']['add_to_calendar'] !== '' ? $hangoutData['urls']['add_to_calendar'] : get_field('calendar_link', 'options'))
                        : ($hangoutStatus === 'live'
                        ? ($hangoutData['urls']['zoom_link'] !== '' ? $hangoutData['urls']['zoom_link'] : get_field('zoom_link', 'options'))
                        : ( $hangoutData['urls']['video_embed'] ?? '#')) }}">
                        @if($hangoutStatus === 'upcoming')
                            add event to calendar
                        @elseif($hangoutStatus === 'live')
                            join call
                        @else
                            Hangout Coming Soon
                        @endif
                    </a>
                @endif
            </div>
        </div>
        <div class="col-span-12 md:col-start-6 lg:col-start-8 md:col-end-13 lg:mt-[200px] mt-[80px]">
            <img class="w-full h-full rounded-lg object-cover" src="{{$hangout['image']}}" alt="{{$hangout['imageAlt']}}">
        </div>
    </div>
</section>
