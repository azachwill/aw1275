<section id="sponsors" class="sponsors">

    <div class="container space-between-sections grid grid-cols-12 gap-y-[80px]">

        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-6',
        ])

        @if ( $hasSponsors )

            @foreach ( $sponsorGroups as $sponsorGroup )

            <div class="sponsor-group col-span-12 grid grid-cols-12">

                @if ( $sponsorGroup['title'] )
                <h5 class="sponsor-group__title col-span-12 h5 text-blue1">{{ $sponsorGroup['title'] }}</h5>
                @endif

                @if ( $sponsorGroup['description'] )
                <p class="sponsor-group__description col-span-12 lg:col-span-6 text-blue1/[.62] body-md-regular link-p:link-light mt-[16px]">{{ $sponsorGroup['description'] }}</p>
                @endif

                <div class="col-span-12 grid grid-cols-12 gap-x-[8px] md:gap-x-[16px] lg:gap-x-[28px] gap-y-[16px] md:gap-y-[16px] lg:gap-y-[16px]">

                    @foreach ( $sponsorGroup['sponsor'] as $sponsor )
                        @if(!empty($sponsor['link']))
                            <a href="{{ $sponsor['link']['url'] }}" target="{{ $sponsor['link']['target'] }}" class="flex items-center justify-center col-span-6 md:col-span-3 py-[10px] px-[20px] lg:py-[10px] lg:px-[40px]">
                                <img class="object-cover" src="{{ $sponsor['logo']['url'] }}" alt="{{ $sponsor['logo']['alt'] }}">
                            </a>
                        @else
                            <div class="flex items-center justify-center col-span-6 md:col-span-3 p-[20px] md:px-[40px] md:pt-[40px] md:pb-[0]">
                                <img class="object-cover" src="{{ $sponsor['logo']['url'] }}" alt="{{ $sponsor['logo']['alt'] }}">
                            </div>
                        @endif
                    @endforeach
                    
                </div>

            </div><!-- .sponsor-group -->

            @endforeach

        @endif

    </div>

</section>