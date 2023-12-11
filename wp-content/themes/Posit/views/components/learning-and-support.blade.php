<section class="section">
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
        ])
        <div class="grid grid-cols-12 col-span-12 gap-6 mt-[80px] md:mt-[120px]">
            @foreach($cards as $index => $card)
                <div class="learning-and-support-card col-span-12 md:col-span-6 bg-gray4/20 p-[40px]">
                    <div class="w-full lg:flex lg:justify-center lg:flex-col lg:pr-[28px]">
                        <p class="h4 mt-[24px] lg:mt-0 text-neutral-dark">
                            {{ $card['name'] }}
                        </p>
                         <div class="mt-[24px]">
                             @include('partials.links.link', [
                                'data' => $card['cta'],
                             ])
                         </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>