@php
    $includeDescription = false;
    if (isset($description) && $description === true) $includeDescription = true;

    $isConference = $isConference ?? false;
@endphp

<a class="post-card rounded-[8px] flex flex-col" href="{{ $post['url'] }}" aria-label="Link to {{$post['title']}}">
    <div class="overflow-hidden rounded-[8px]">
        <img class="w-[100%] h-[100%] object-cover" src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
    </div>
    <div class="flex flex-col">
        <div class="mt-[16px]">
            <h3 class="h5 line-clamp-3">
                {{ $post['title'] }}
            </h3>
            @if($isConference && !empty($post['customData']['conference_details']['speakers']))
                <div class="mt-[8px]g gap-[8px] body-md-regular text-blue1">
                    @foreach($post['customData']['conference_details']['speakers'] as $speaker)
                        @php
                            $serializeSpekaer = serializePost($speaker)
                        @endphp
                        <div>
                            {{ $serializeSpekaer['title'] }}
                        </div>
                    @endforeach
                </div>
            @endif
            @if($includeDescription)
                <p class="{{ $isConference ? 'mt-[8px]' : 'mt-[16px]' }} body-md-regular text-neutral-blue62 line-clamp-3">
                    {{ $post['excerpt'] }}
                </p>
            @endif
        </div>
        <div class="link link-md-light mt-[16px]">
            Learn More
            @include('partials.icons', [
                'icon' => 'link-md-light'
            ])
        </div>
    </div>
</a>
