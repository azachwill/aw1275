@php
    $addHeader = $addHeader ?? true;
@endphp

<section class="cards-grid-layout">
    <div class="container space-between-sections grid grid-cols-12 lg:gap-x-[28px]">
        @if($addHeader)
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
            ])
        @endif

        @if ( is_page(2314) )
        <div class="support-search col-span-12">
            <div id="rstudio-search-box"></div>
        </div>
        @endif

        @include('partials.cards-grid', [
            'data' => $cardsGrid,
            'containerClasses' => $addHeader ? '' : 'mt-0 md:mt-0 lg:mt-0',
        ])
    </div>
</section>
