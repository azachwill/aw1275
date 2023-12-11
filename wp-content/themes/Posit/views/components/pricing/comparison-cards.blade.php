<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 lg:col-span-5'
            ])

            <div class="col-span-12 md:col-span-6 md:col-start-4 lg:col-span-4 lg:col-start-8 mt-20 lg:mt-0">
                <div class="flex justify-center items-center mb-7">
                    <div class="tabs-group flex p-1 bg-blue3/[.1] rounded gap-1">
                        @foreach($cards as $key => $card)
                            <button type="button" class="tab-link" name="tab-selector" data-index="{{ $key }}">
                                {{ $card['title'] }}
                            </button>
                        @endforeach
                    </div>
                </div>
                <div class="tabs-content-container">
                    @foreach($cards as $key => $pricingCard)
                        <div class="tab-content" data-index="{{ $key }}">
                            @include('partials.pricing.card', $pricingCard)
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
