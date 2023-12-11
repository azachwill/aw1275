@php
    $serializeSpeaker = serializePost($speaker)
@endphp
<div class="grid md:flex w-full gap-[28px]">
    @if(!empty($serializeSpeaker['image']))
        <img class="w-full h-full min-w-[164px] lg:min-w-[200px] min-h-[164px] lg:min-h-[200px] max-w-[164px] lg:max-w-[200px] max-h-[164px] lg:max-h-[200px] rounded-lg object-cover"
             src="{{ $serializeSpeaker['image'] }}" alt="{{ $serializeSpeaker['imageAlt'] }}">
    @endif
    <div class="flex w-full items-center">
        <div class="h-fit w-full">
            <div class="h4-regular text-blue1">
                {{ $serializeSpeaker['title'] }}
            </div>
            @if(!empty($serializeSpeaker['customData']['role']))
                <div class="mt-[8px] body-md-semibold text-blue4">
                    {{ $serializeSpeaker['customData']['role'] }}
                </div>
            @endif
        </div>
    </div>
</div>