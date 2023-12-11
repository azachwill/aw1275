<section id="join-us">
    <div class="container space-between-sections grid grid-cols-12 gap-[28px]">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-11 lg:col-span-5',
            'buttonContainerClasses' => 'flex flex-col md:block'
        ])

        @if($collage && $collage['images'])
            @php
                $images = $collage['images'];
            @endphp
            <div class="col-span-12 md:col-span-5 lg:col-span-4 md:col-start-7 lg:col-start-8 mt-[77px] md:mt-[80px] lg:mt-[220px] grid grid-cols-2 gap-[8px] md:gap-[16px] lg:gap-[28px] max-h-[504px]">
                <div class="h-full flex flex-col">
                    @if($images[0]['image'])
                        <img class="h-[117px] md:h-[117px] lg:h-[163px] rounded-[8px] object-cover" src="{{$images[0]['image']['url']}}" alt="{{ $images[0]['image']['alt']}}">
                    @endif
                    @if($images[2]['image'])
                        <img class="h-[282px] md:h-[224px] lg:h-[324px] rounded-[8px] object-cover mt-[16px]" src="{{$images[2]['image']['url']}}" alt="{{ $images[2]['image']['alt']}}">
                    @endif
                </div>
                <div class="h-full flex flex-col">
                    @if($images[1]['image'])
                        <img class="h-[199.5px] md:h-[170.5px] lg:h-[244px] rounded-[8px] object-cover" src="{{$images[1]['image']['url']}}" alt="{{ $images[1]['image']['alt']}}">
                    @endif
                    @if($images[3]['image'])
                        <img class="h-[199.5px] md:h-[170.5px] lg:h-[244px] rounded-[8px] object-cover mt-[16px]" src="{{$images[3]['image']['url']}}" alt="{{ $images[3]['image']['alt']}}">
                    @endif
                </div>
            </div>
        @endif
    </div>
</section>
