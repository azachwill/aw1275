<section id="vertical-paragraphs">
    <div class="container space-between-sections">
        <div class="grid grid-cols-12 gap-[8px] md:gap-[16px] lg:gap-[28px]">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 lg:col-span-5',
            ])
            <div class="col-span-12 lg:col-span-6 lg:col-start-7 mt-[60px] md:mt-[80px] lg:mt-[200px]">
                @foreach($paragraphs as $index => $paragraph)
                    <div class="mb-[60px] lg:mb-[120px] last-of-type:mb-0">
                        <h3 class="h3">
                            {{ $paragraph['title'] }}
                        </h3>
                        <p class="body-lg-regular mt-[16px] text-blue1/[.62]">
                            {{ $paragraph['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>