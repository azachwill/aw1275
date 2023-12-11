<section class="space-between-sections">
    <div class="container grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
        ])
    </div>

    @if($cards)
        <div class="container grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6 md:col-start-5 lg:col-start-7 mt-[60px] md:mt-[80px] mt-[60px] lg:mt-0">
                @foreach($cards as $index => $card)
                    @include('partials.card', [
                        'data' => $card,
                        'containerClasses' => '[&:not(:first-of-type)]:mt-[16px] lg:[&:not(:first-of-type)]:mt-[24px]',
                    ])
                @endforeach
            </div>
        </div>
    @endif

</section>
