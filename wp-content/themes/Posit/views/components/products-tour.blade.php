<section class="products-tour">
    <div class="container space-between-sections">
        <div class="grid grid-cols-12 gap-[8px] md:gap-[16px] lg:gap-[28px]">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 lg:col-span-5',
            ])
            <div class="col-span-12 lg:col-span-8 lg:col-start-5 mt-[120px]">
                @if($selectProducts)
                    @include('partials.products-tour.selected-products', [
                        'selectedProducts' => $selectedProducts,
                    ])
                @else
                    @include('partials.products-tour.products-by-category', [
                        'categories' => $categories,
                    ])
                @endif
            </div>
        </div>
    </div>
</section>
