@php

@endphp
<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-11 lg:col-span-6'
            ])
        </div>
        <div class="mt-[24px] md:mt-[80px] lg:mt-[120px] grid grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px] md:gap-y-[60px]">
            @foreach($products as $index => $product)
                <div class="col-span-12 md:col-span-4 mb-[60px] md:mb-0 flex flex-wrap">
                    @if($product['is_external_product'])
                        @include('partials.segment-ext-product-card', [
                            'product' => $product['external_product_information'],
                        ])
                    @else
                        @include('partials.segment-product-card', [
                            'product' => $product['product_information'],
                        ])
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
