<section>
    <div class="container space-between-sections links-404">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>
        <div class="grid grid-cols-12 mt-[80px] lg:mt-[120px] md:gap-x-[28px]">
            @foreach($links as $key => $link)
                <div class="grid col-span-full md:col-span-6 lg:col-span-4 place-content-between mt-[60px] md:mt-0'">
                    <div>
                        <div class="h5-regular text-blue1">
                            {{ $link['title'] }}
                        </div>
                        <div class="mt-[8px] body-md-regular text-blue1/[.62]">
                            {{ $link['description'] }}
                        </div>
                    </div>
                    @include('partials.cta', [
                        'data' => $link['cta'],
                        'additional_classes' => 'w-fit h-fit mt-[16px]'
                    ])
                </div>
            @endforeach
        </div>
    </div>
</section>