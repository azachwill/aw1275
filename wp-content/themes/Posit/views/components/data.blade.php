<section id="data">
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>

        @if($cards)
            <div class="mt-[80px] md:mt-[120px]">
                @foreach($cards as $index => $card)
                    <div class="grid grid-cols-12 md:gap-[16px] lg:gap-[28px] [&:not(:first-child)]:mt-[80px]">
                        <div class="col-span-12 md:col-span-5 md:col-start-3">
                            <h2 class="h2-regular text-blue1">
                                {{ $card['title'] }}
                            </h2>
                            @if ($card['subtitle'])
                                <h3 class="h4-regular text-blue1 mt-[8px]">
                                    {{ $card['subtitle'] }}
                                </h3>
                            @endif
                            <p class="h5 text-blue1/[.8] mt-[8px]">
                                {{ $card['description'] }}
                            </p>
                        </div>
                        <div class="col-span-12 md:col-span-5 mt-[24px] md:mt-auto">
                            <img class="w-full" src="{{ $card['image']['url'] }}" alt="{{ $card['image']['alt'] }}">
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
