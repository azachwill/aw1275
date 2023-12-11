<section>
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8',
        ])
        <div class="col-span-12 md:col-span-10 md:col-start-3 mt-[80px]">
            @foreach($cards as $index => $card)
                <div class="grid grid-cols-12 bg-gray4/[0.2] px-[24px] py-[40px] md:p-[32px] lg:px-[80px] lg:py-[40px] [&:not(:first-of-type)]:mt-[24px]">
                    <div class="flex col-span-12 md:col-span-4 text-center items-center">
                        <div class="h5 text-blue1">
                            {{ $card['left_text'] }}
                        </div>
                    </div>
                    <div class="flex col-span-12 md:col-span-4 my-[28px] md:my-0 md:px-[28px] justify-center items-center">
                        <p class="ui-large text-blue1 uppercase text-center">
                            {{ $middleText }}
                        </p>
                    </div>
                    <div class="flex col-span-12 md:col-span-4 text-center items-center">
                        <div class="h5 text-blue1">
                            {{ $card['right_text'] }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
