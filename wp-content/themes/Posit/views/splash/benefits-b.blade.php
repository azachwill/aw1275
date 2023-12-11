@php
    $benefits = get_field('benefits_b')
@endphp

@foreach($benefits as $index => $benefit)

    <div class="h-[100px] bg-blue5 hidden md:block"></div>
    <section id="benefits-{{$benefit['layout']}}-b"
             class="section section-benefits bg-blue5 {{ $benefit['layout'] === '2' ? 'lg:h-screen lg:overflow-hidden' : '' }}">
        <div class="section-container text-blue1 bg-blue5 relative grid grid-cols-12 content-center gap-x-2 md:gap-x-4 xl:gap-x-[22px] items-center {{ $benefit['layout'] === '2' ? 'lg:h-screen lg:overflow-auto' : ''}}">
            <div class="col-span-12 md:col-span-6 lg:col-span-3">
                <h2 class="ui-h1 {{ is_page( 3152 ) ? 'hidden' : null }}">
                    {{str_pad($index+1, 2, '0', STR_PAD_LEFT)}}
                </h2>
                <h3 class="{{ !is_page( 3152 ) ? 'md:mt-2 h3' : null }}">
                    {{$benefit['title']}}
                </h3>
                <p class="mt-4 md:mt-6 body-medium">
                    {!! $benefit['description'] !!}
                </p>
            </div>
            @if($benefit['layout'] === '1')
                <div
                    class="col-span-full lg:col-start-5 lg:col-end-13 grid grid-cols-2 gap-2 md:gap-4 xl:gap-[22px] mt-[40px] md:mt-20 lg:mt-0 ls:hidden">
                    <div
                        class="flex flex-col justify-center gap-2 md:gap-4 xl:gap-[22px] h-[30vh] md:max-h-[43.5vh] lg:max-h-[74vh] lg:min-h-[70vh] xl:max-h-[76.5vh]">
                        <img width="164" height="95"
                             class="w-full h-auto max-h-[51%] rounded-2xl md:rounded-[30px] object-cover"
                             data-src="{{$benefit['two_images'][0]['image']['url']}}"
                             alt="{{$benefit['two_images'][0]['image']['alt']}}"/>
                        <div
                            class="w-full h-[40%] lg:h-[41%] rounded-2xl md:rounded-[30px] border md:border-2 px-4 md:px-5 overflow-hidden relative code-container">

                            @php
                            $copyType1          = $benefit['two_codes'][0]['copy_type'];
                            $testimonial1       = $benefit['two_codes'][0]['testimonial'];
                            @endphp

                            @if ( $copyType1 == 'testimonial' )
                                <div class="testimonial py-[25px]">
                                    <p class="testimonial__quote body-large">{{ $testimonial1['quote'] }}</p>
                                    <p class="testimonial__name ui-small font-bold mt-[20px]">{{ $testimonial1['name'] }}</p>
                                    <p class="testimonial__title ui-small font-bold mt-[5px]">{{ $testimonial1['title'] }}</p>
                                </div>
                            @else
                                <pre id="first-code"
                                    class="ui-xsmall md:ui-small text-blue1 break-words normal-case whitespace-pre-wrap w-[90%] absolute"
                                    aria-hidden="true">
                                    {{$benefit['two_codes'][0]['code']}}
                                </pre>
                            @endif
                        
                        </div>
                    </div>
                    <div
                        class="flex flex-col justify-center gap-2 md:gap-4 xl:gap-[22px] h-[30vh] md:max-h-[43.5vh] lg:max-h-[74vh] lg:min-h-[70vh] xl:max-h-[76.5vh]">
                        <div
                            class="w-full h-[40%] lg:h-[41%] rounded-2xl md:rounded-[30px] border md:border-2 px-4 md:px-5 overflow-hidden relative code-container">

                            @php
                            $copyType2          = $benefit['two_codes'][1]['copy_type'];
                            $testimonial2       = $benefit['two_codes'][1]['testimonial'];
                            @endphp

                            @if ( $copyType2 == 'testimonial' )
                                <div class="testimonial py-[25px]">
                                    <p class="testimonial__quote body-large">{{ $testimonial2['quote'] }}</p>
                                    <p class="testimonial__name ui-small font-bold mt-[20px]">{{ $testimonial2['name'] }}</p>
                                    <p class="testimonial__title ui-small font-bold mt-[5px]">{{ $testimonial2['title'] }}</p>
                                </div>
                            @else
                                <pre id="second-code"
                                    class="ui-xsmall md:ui-small text-blue1 break-words normal-case whitespace-pre-wrap w-[90%] absolute"
                                    aria-hidden="true">
                                    {{$benefit['two_codes'][1]['code']}}
                                </pre>
                            @endif
                            
                        </div>
                        <img width="164" height="94"
                             class="w-full h-auto max-h-[50.5%] rounded-2xl md:rounded-[30px] object-cover"
                             data-src="{{$benefit['two_images'][1]['image']['url']}}"
                             alt="{{$benefit['two_images'][1]['image']['alt']}}"/>
                    </div>
                </div>

            @elseif ( $benefit['layout'] === '2' )

                @php
                $imageGridType          = $benefit['image_grid_type'];
                @endphp

                @if ( $imageGridType == 'two-images' )

                    <div class="relative lg:static col-span-full lg:col-start-5 lg:col-end-13 grid grid-cols-8 md:grid-cols-12 lg:grid-cols-8 gap-2 md:gap-4 xl:gap-[22px] mt-[40px] md:mt-20 lg:mt-0 ls:hidden">
                        <div class="col-span-2">
                            <img id="first-img" width="112" height="140"
                                class="absolute w-[33.5%] lg:w-[21.4%] top-2/4 -translate-y-1/2 rounded-2xl md:rounded-[30px] object-cover"
                                data-src="{{$benefit['two_images_grid'][0]['image']['url']}}"
                                alt="{{$benefit['two_images_grid'][0]['image']['alt']}}"/>
                        </div>
                        <div
                            class="col-start-4 md:col-start-3 lg:col-start-2 col-span-6 md:col-span-6 lg:col-span-10 z-10 lg:-mr-20">
                            <img id="third-img" width="206" height="258"
                                class="w-full rounded-2xl md:rounded-[30px] object-cover"
                                data-src="{{$benefit['two_images_grid'][1]['image']['url']}}"
                                alt="{{$benefit['two_images_grid'][1]['image']['alt']}}"/>
                        </div>
                    </div>

                @else 

                    <div class="relative lg:static col-span-full lg:col-start-5 lg:col-end-13 grid grid-cols-8 md:grid-cols-12 lg:grid-cols-8 gap-2 md:gap-4 xl:gap-[22px] mt-[40px] md:mt-20 lg:mt-0 ls:hidden">
                        <div class="col-span-1">
                            <img id="first-img" width="112" height="140"
                                class="absolute w-[33.5%] lg:w-[21.4%] top-2/4 -translate-y-1/2 rounded-2xl md:rounded-[30px] object-cover"
                                data-src="{{$benefit['three_images'][0]['image']['url']}}"
                                alt="{{$benefit['three_images'][0]['image']['alt']}}"/>
                        </div>
                        <div class="col-start-2 md:col-start-3 lg:col-start-2 col-span-1">
                            <img id="second-img" width="152" height="191"
                                class="absolute w-[45.5%] md:w-[43%] lg:w-[28.9%] top-2/4 -translate-y-1/2 rounded-2xl md:rounded-[30px] object-cover"
                                data-src="{{$benefit['three_images'][1]['image']['url']}}"
                                alt="{{$benefit['three_images'][1]['image']['alt']}}"/>
                        </div>
                        <div
                            class="col-start-4 md:col-start-6 lg:col-start-4 col-span-5 md:col-span-7 lg:col-span-5 z-10 lg:-mr-20">
                            <img id="third-img" width="206" height="258"
                                class="w-full rounded-2xl md:rounded-[30px] object-cover"
                                data-src="{{$benefit['three_images'][2]['image']['url']}}"
                                alt="{{$benefit['three_images'][2]['image']['alt']}}"/>
                        </div>
                    </div>

                @endif

            @elseif($benefit['layout'] === '3')

                <div id="open-source-assets"
                     class="col-span-full lg:col-start-5 lg:col-end-13 grid grid-cols-12 md:grid-cols-8 mt-[40px] md:mt-20 lg:mt-0 ls:hidden">
                    <img width="335" height="93"
                         class="col-span-full w-full h-full max-h-[15vh] md:max-h-[21vh] lg:max-h-[37vh] xl:max-h-[38vh] rounded-t-2xl md:rounded-t-[30px]"
                         data-src="{{$benefit['image']['url']}}" alt="{{$benefit['image']['alt']}}"/>
                    <video data-src="{{$benefit['video']['url']}}"
                           class="col-span-7 md:col-span-6 lg:col-span-5 xl:col-span-4 w-full h-full max-h-[15vh] md:max-h-[21vh] lg:max-h-[37vh] xl:max-h-[38vh] rounded-bl-2xl md:rounded-bl-[30px] object-cover"
                           autoplay loop muted>
                    </video>
                    <div
                        class="col-span-5 md:col-span-2 lg:col-span-3 xl:col-span-4 w-full h-full max-h-[15vh] md:max-h-[21vh] lg:max-h-[37vh] xl:max-h-[38vh] rounded-br-2xl md:rounded-br-[30px] px-4 md:px-5 bg-blue3 overflow-hidden relative">

                        @php
                        $copyType3          = $benefit['layout_3_copy_type'];
                        $testimonial3       = $benefit['testimonial'];
                        @endphp

                        @if ( $copyType3 == 'testimonial' )
                            <div class="testimonial py-[25px]">
                                <p class="testimonial__quote text-white body-large">{{ $testimonial3['quote'] }}</p>
                                <p class="testimonial__name ui-small font-bold text-white mt-[20px]">{{ $testimonial3['name'] }}</p>
                                <p class="testimonial__title ui-small font-bold text-white mt-[5px]">{{ $testimonial3['title'] }}</p>
                            </div>
                        @else
                            <pre id="open-source-code"
                                class="w-full h-full ui-xsmall md:ui-small text-neutral-light break-words normal-case w-4/5 whitespace-pre-wrap absolute"
                                aria-hidden="true">
                                {{$benefit['code']}}
                            </pre>
                        @endif

                    </div>
                </div>
            @endif
        </div>
    </section>
@endforeach
