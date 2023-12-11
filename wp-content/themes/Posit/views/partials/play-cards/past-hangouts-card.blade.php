@php
    $hangoutDetail          = $data['customData'];
    $hangoutStatus          = $hangoutDetail['status'];

    $timestamp              = strtotime($hangoutDetail['date_and_time']);
    $dateFormatted          = date("m/d/Y", $timestamp);

    $speaker                = serializePost($card['customData']['primary_speaker']);
    $speakerImage           = $speaker['image'];

    $isArchiveCard          = $gridType == 'archive';
@endphp

<div class="past-hangout-card grid {{ $containerClasses ?? '' }}">
    <a href="{{ $data['url'] }}" class="card-full-cta block relative" aria-label="Link to Hangout {{$data['title']}}">
        <div class="relative overflow-hidden{{ !$isArchiveCard ? ' lg:max-h-[168px]' : '' }}">
            <div class="rounded-[8px]">
                <img class="w-full aspect-video object-cover rounded-lg" src="{{ $data['image'] }}" alt="{{ $speaker['title'] }}" />
            </div>
        </div>
        <div class="flex mt-[16px]">
            <div class="flex flex-col">
                <h3 class="h4 text-blue1 line-clamp-2">
                    {{ $data['title'] }}
                </h3>
                @if ( $hangoutStatus === 'past' && $hangoutDetail['toggle_speakers'] )
                <p class="past-hangout-card__speaker body-lg-semibold text-blue4 mt-[8px]">
                    {{ $speaker['title'] }}
                </p>
                @endif
                <p class="body-md-regular text-neutral-blue62 mt-[8px] md:mt-[16px] lg:mt-[8px] line-clamp-4">
                    {{ $hangoutDetail['primary_talk_description'] }}
                </p>
                <span class="body-md-regular text-blue1 mt-[8px] mb-[16px]">{{ $dateFormatted }}</span>
                <p class="link link-md-light mt-[16px]">
                    Learn More
                    @include('partials.icons', [
                        'icon' => 'link-md-light'
                    ])
                </p>
            </div>
        </div>
    </a>
</div>
