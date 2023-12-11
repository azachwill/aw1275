@php
    $post = serializePost($product['product']);
    $reversedOrder = false;
    if (isset($reversed)) $reversedOrder = true;
@endphp

<div class="flex flex-col flex-wrap justify-between {{$reversedOrder ? 'text-end' : ''}}">
    <div class="flex flex-col">
        <img class="w-[100%]" src="{{ $post['image'] }}"
             alt="{{ $post['imageAlt'] }}">
        <h3 class="h5-regular mt-[16px]">
            {{ $post['title'] }}
        </h3>
        <p class="body-md-regular mt-[8px] text-blue1/[.62] mb-[16px]">
            {{$post['excerpt']}}
        </p>
    </div>
    <div class="mt-[16px] flex flex-col md:flex-row {{$reversedOrder ? 'justify-end' : ''}}">
        @if($product['add_cta'] == 'self')
            @include('partials.cta', [
                'data' => [
                    'link' => [
                        'url' => $post['url'],
                        'title' => 'Learn more',
                        'target' => '_blank'
                    ],
                    'button_type' => $product['cta_styles']['button_type'],
                    'button_size' => $product['cta_styles']['button_size'],
                ]
            ])
        @else
            @include('partials.cta', [
                'data' => $product['cta'],
            ])
        @endif
    </div>
</div>