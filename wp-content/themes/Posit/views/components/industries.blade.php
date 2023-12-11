<!-- TODO: Check if this component is in use -->
<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-5">
                @include('partials.header', [
                    'data' => $header,
                ])
                @if($image)
                    <img class="mt-[80px]" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}"/>
                @endif
            </div>
        </div>
        <div class="grid grid-cols-12 mt-[60px] md:mt-[80px] lg:mt-0">
            <div class="col-span-12 md:col-span-8 md:col-start-5 lg:col-span-6 lg:col-start-7">
                @foreach($cards as $index => $card)
                    <div class="bg-gray4/20 p-[32px] md:p-[40px] [&:not(:first-child)]:mt-[16px]">
                        <img class="w-[40px] h-[40px]" src="{{ $card['icon']['url'] }}" alt="{{ $card['icon']['alt'] }}" />
                        <div class="mt-[40px]">
                            <h3 class="h3 text-blue1">
                                {{ $card['name'] }}
                            </h3>
                        </div>
                        <div class="mt-[24px]">
                            @include('partials.links.link', [
                               'data' => $card['cta'],
                            ])
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>