@php
    $speakerData = $speaker['customData'];
@endphp

@if ( $speakerData['bio'] || $speaker['excerpt'] )

<div class="card-hangout-featured [&:not(:first-of-type)]:mt-[24px] md:flex w-full p-[24px] lg:p-[40px] rounded-lg bg-gray4/20">

    @if ( $speaker['image'] )
    <img class="w-full h-full min-w-[164px] lg:min-w-[200px] min-h-[164px] lg:min-h-[200px] max-w-[164px] lg:max-w-[200px] max-h-[164px] lg:max-h-[200px] rounded-lg object-cover"
         src="{{$speaker['image']}}" alt="{{$speaker['imageAlt']}}">
    @endif

    <div class="mt-[28px] md:mt-0 md:ml-[28px]">
        <div class="h4-regular text-blue1">
            {{ $speaker['title'] }} {{ $isHost ? '- Host' : ''}}
        </div>
        @if(!empty($speakerData['role']))
            <div class="mt-[8px] body-md-semibold text-blue4">
                {{ $speakerData['role'] }}
            </div>
        @endif
        <div class="mt-[24px] body-lg-regular text-blue1/[.62] [&:not(:first-child)]:paragraphs:mt-[24px]">
            @if(!empty($speakerData['bio']))
                {!! $speakerData['bio'] !!}
            @else
                {{ $speaker['excerpt'] }}
            @endif
        </div>
        @if(!empty($speakerData['social_media_links']))
            <div class="flex mt-[24px] items-center">
                <div class="flex">
                    @foreach($speakerData['social_media_links'] as $socialMediaLink)
                        <a target="_blank" href="{{$socialMediaLink['url']}}" class="connect-item flex btn btn-md-secondary [&:not(:first-child)]:ml-[16px] !p-[12px] !bg-transparent items-center" aria-label="Link to a social media: {{$socialMediaLink['url']}}">
                            <img class="w-[16px] h-[16px]" src="{{$socialMediaLink['icon']['url']}}" alt="{{$socialMediaLink['icon']['alt']}}">
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>

@endif


