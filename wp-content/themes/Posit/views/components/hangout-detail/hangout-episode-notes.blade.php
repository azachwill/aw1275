<section class="hangout-episode-notes">
    <div class="container grid grid-cols-12 py-[60px] lg:py-[80px] lg:gap-x-[28px]">
        @include('partials.header', [
            'data' => [
                'title_heading' => [
                    'title' => 'Episode notes',
                ],
            ],
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
        ])
        <div class="grid col-span-12 lg:col-span-7 lg:col-start-6 mt-[80px] lg:mt-[120px]">
            <div class="wysiwyg-content w-full body-lg-regular text-neutral-dark">
                {!! $episodeNotes !!}
            </div>
        </div>
    </div>
</section>