<section id="hover-cards">
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>
        <div class="grid grid-cols-12 mt-[80px] lg:mt-[120px]">
            <div id="hover-cards-container" class="grid grid-cols-12 col-span-12 lg:col-span-10 lg:col-start-3 md:gap-x-[16px] lg:gap-x-[28px] md:gap-y-[24px]">
                @foreach($cards as $index => $card)
                    <div class="bg-gray4/20 hover:bg-blue3/10 h-auto lg:h-[437px] py-[40px] md:py-[60px] px-[20px] lg:p-[40px] [&:not(:first-of-type)]:mt-[24px] md:[&:not(:first-of-type)]:mt-0 rounded-lg {{ $card['full_width'] ? 'col-span-12' : 'col-span-12 md:col-span-6' }} {{ $card['full_width'] ? 'full-width' : 'half-width' }}">
                        <div class="flex flex-col justify-center items-center h-full mx-auto max-w-full {{ $card['full_width'] ? 'w-full lg:w-[600px]' : 'w-[275px]' }}">
                            <img class="w-auto h-[60px]" src="{{ $card['svg']['url'] }}" alt="{{ $card['svg']['alt'] }}"/>
                            <div class="mt-[20px] text-center">
                                <h3 class="h3 text-blue1">
                                    {{ $card['title'] }}
                                </h3>
                            </div>
                            <div class="body-md-regular text-blue1/[.62] text-center mt-[8px] mb-[20px] lg:mb-0">
                                {!! $card['description'] !!}
                            </div>
                            <div class="mt-auto lg:mt-[20px]">
                                @include('partials.links.link', [
                                   'data' => $card['cta'],
                                ])
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
