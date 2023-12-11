@php
    $productImg = $product['image'];
    $productCTA = $product['cta'];

    $reversedOrder = false;
    if (isset($reversed)) $reversedOrder = true;
@endphp

<div class="flex flex-col w-full flex-wrap justify-between {{$reversedOrder ? 'text-end' : ''}}">
    <div class="flex flex-col">
        <img class="w-[100%]" src="{{ $productImg['url'] }}"
             alt="{{ $productImg['alt'] }}">
        <h3 class="h5-regular mt-[16px]">
            {{ $product['title']}}
        </h3>
        <p class="body-md-regular mt-[8px] text-blue1/[.62] mb-[16px]">
            {{$product['description']}}
        </p>
    </div>
    <div class="mt-[16px] flex flex-col md:flex-row {{$reversedOrder ? 'justify-end' : ''}}">
        @if($product['has_cta'])
            @include('partials.cta', [
                'data' => $productCTA,
            ])
        @endif
    </div>
</div>
