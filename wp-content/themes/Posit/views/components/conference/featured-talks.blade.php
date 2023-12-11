<section class="featured-talks">
    <div class="grid grid-cols-12 container py-[80px] lg:py-[120px] gap-y-[80px] lg:gap-y-[120px]">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
        ])

        @if(!empty($talks))
            <div class="col-span-12 grid grid-cols-12 gap-y-[24px]">
                @foreach($talks as $talk)
                    @php
                        $serializeTalk = serializePost($talk['talk'])
                    @endphp
                    <div class="col-span-12 md:col-start-4 lg:col-start-5 px-[20px] py-[40px] md:px-[40px] bg-gray4/20 rounded-lg">
                        <div class="h3 text-blue1">
                            {{ $serializeTalk['title'] }}
                        </div>
                        @if(!empty($serializeTalk['excerpt']))
                            <div class="mt-[16px] mb-[8px] body-md-regular text-blue1/[.62]">
                                {{ $serializeTalk['excerpt'] }}
                            </div>
                        @endif
                        
                        {{-- Speakers --}}
                        @if(!empty($serializeTalk['customData']['conference_details']['speakers']))
                            <div class="grid gap-y-[24px] mt-[40px]">
                                <div class="sh4 text-blue1 uppercase">
                                    Speakers:
                                </div>
                                @foreach($serializeTalk['customData']['conference_details']['speakers'] as $speaker)
                                    @include('components.conference.featured-talk-speaker', [
                                        'speaker' => $speaker
                                    ])
                                @endforeach
                            </div>
                        @endif

                        <div class="mt-[40px] flex justify-end">
                            @include('partials.links.link', [
                                'data' => [
                                    'link' => [
                                        'url' => $serializeTalk['url'],
                                        'title' => 'learn more',
                                        'target' => '_self'
                                    ],
                                ]
                            ])
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</section>