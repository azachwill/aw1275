<section id="hero" class="section pt-[80px] [&:last-of-type]:pb-[80px]">
    <div class="container grid grid-cols-12">
        <div class="col-span-12">
            @if($logo)
                <img class="max-w-[190px] rounded-lg" src="{{$logo['url']}}" alt="{{ $logo['alt'] }}">
            @endif
            <div class="grid grid-cols-12 flex items-start md:items-center h-fit">
                @if($products)
                    <div class="col-span-12 md:col-span-6 h-fit mt-[28px]">
                         <div class="flex flex-wrap">
                            @foreach($products as $index => $product)
                                @php
                                    $product = serializePost($product);
                                @endphp

                                @if ( $tagSource == 'custom' )

                                    <div class="hero__tag flex">
                                        <p class="body-sm-semibold text-blue1 uppercase">
                                            {{ $tagText }}
                                        </p>
                                    </div>

                                @else

                                    <div class="hero__tag flex">
                                        @if($index > 0)
                                            <div class="flex justify-center my-auto w-[2px] h-[16px] bg-gray4/[.8] mx-[6px]"></div>
                                        @endif
                                        <a href="{{ $product['url'] }}" class="body-sm-semibold text-blue1 uppercase">
                                            {{ $product['title'] }}
                                        </a>
                                    </div>

                                @endif
                                
                            @endforeach
                         </div>
                    </div>
                @endif
                @if($industries)
                    <div class="col-span-12 md:col-span-6 h-fit mt-[24px] md:mt-[28px]">
                         <div class="flex flex-wrap justify-start md:justify-end gap-[8px]">
                            @foreach($industries as $index => $industry)
                                <div class="bg-blue1/[.1] rounded-[4px] px-[16px] py-[4px] ui-medium-semibold text-blue2 uppercase">
                                    {{ $industry->name }}
                                </div>
                            @endforeach
                         </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-span-12 md:col-span-11 lg:col-span-9">
            <h1 class="h1 text-blue1 mt-[28px]">
                {{ $title }}
            </h1>
            @if($description)
                <div class="text-blue1/[.62] body-lg-regular mt-[24px]">
                    {{ $description }}
                </div>
            @endif

            @if($date)
                <div class="text-blue1 body-md-regular mt-[24px]">
                    {{ $date }}
                </div>
            @endif

            @if($ctas)
                <div class="flex flex-col md:flex-row mt-[40px]">
                    @foreach($ctas as $index => $cta)
                        @include('partials.cta', [
                            'data' => $cta,
                            'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                        ])
                    @endforeach
                </div>
            @endif
        </div>

        @if( $mediaChoice == 'image' )
            <div class="col-span-12 mt-[60px] lg:mt-[80px]">
                <img class="w-screen rounded-lg" src="{{$image['url']}}" alt="{{ $image['alt'] }}">
            </div>
        @else
            <div class="col-span-12 mt-[60px] lg:mt-[80px]">
                {!! $video !!}
            </div>
        @endif

    </div>
</section>
