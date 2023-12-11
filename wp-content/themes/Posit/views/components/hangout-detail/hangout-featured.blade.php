<section class="hangout-featured">
    <div class="container grid grid-cols-12 py-[80px] lg:gap-x-[28px]">
        @include('partials.header', [
            'data' => [
                'title_heading' => [
                    'title' => 'Featured in this episode',
                ],
            ],
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
        ])
        <div class="grid col-span-12 lg:col-span-7 lg:col-start-6 mt-[80px] lg:mt-[120px]">
            @include('components.hangout-detail.card-hangout-featured', [
                'speaker' => serializePost($hangoutData['host']),
                'isHost' => true
            ])
            @include('components.hangout-detail.card-hangout-featured', [
                'speaker' => serializePost($hangoutData['primary_speaker']),
                'isHost' => false,
            ])
            @if($hangoutData['featured_speakers'])
                @foreach($hangoutData['featured_speakers'] as $featuredSpeaker)
                    @include('components.hangout-detail.card-hangout-featured', [
                        'speaker' => serializePost($featuredSpeaker),
                        'isHost' => false
                    ])
                @endforeach
            @endif
        </div>
    </div>
</section>