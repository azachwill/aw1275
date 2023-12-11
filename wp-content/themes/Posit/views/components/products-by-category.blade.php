@php
    $productSegments = [];

    foreach ($segments as $segment) {
        $productSegments[] = $segment->slug;
    }

    $productArgs = getTaxonomyArg('segments', $productSegments);
    $entries = productSegmentTaxonomyRequest($productArgs, 'product');
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
            @foreach($entries as $index => $project)
                <div class="col-span-12 md:col-span-4 {{ $index === 0 ? 'md:first-of-type:col-start-5' : '' }} mb-[60px] md:mb-0 flex flex-wrap">
                    @include('partials.post-card', [
                        'data' => $project,
                        'ctaText' => 'Choose your version'
                    ])
                </div>
            @endforeach
        </div>
    </div>
</section>