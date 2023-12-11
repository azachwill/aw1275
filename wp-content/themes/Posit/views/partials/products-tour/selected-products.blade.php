@if($selectedProducts)
    @foreach($selectedProducts as $index => $section)
        <div class="category mb-[120px] lg:mb-[200px] last-of-type:mb-0">
            <div class="category-header">
                @if($section['header']['image'])
                    <img class="max-w-[60px] h-[60px] w-full object-contain max-h-min"
                         src="{{ $section['header']['image']['url'] }}"
                         alt="{{ $section['header']['image']['alt'] }}">
                @endif

                <h3 class="h3 mt-[40px]">
                    {{ $section['header']['title'] }}
                </h3>

                <p class="body-md-regular text-neutral-blue62 mt-[24px]">
                    {{ $section['header']['description'] }}
                </p>

                @include('partials.cta', [
                    'data' => $section['header']['cta'],
                    'additional_classes' => 'uppercase inline-block mt-[40px]'
                ])
            </div>
            <div class="grid grid-cols-2 gap-x-[8px] md:gap-x-[16px] lg:gap-x-[28px] gap-y-[16px] lg:gap-y-[24px] mt-[80px]">
                @foreach($section['products'] as $index => $product)
                    <div class="col-span-2 lg:col-span-1 flex">
                        @if($product['is_external_product'])
                            @php
                                $information = $product['external_product_information'];
                                $link = $information['has_cta'] ? $information['cta']['link']['url'] : '#';
                                $target = !empty($information['cta']['link']['target']) ? $information['cta']['link']['target'] : '_blank';
                            @endphp

                            @include('partials.card', [
                                'data' => [
                                    'icon' => null,
                                    'title' => $information['title'],
                                    'url' => $link,
                                    'description' => $information['description'],
                                    'link_options' => '',
                                    'post_link' => false,
                                    'add_link' => true,
                                    'link' => [
                                        'target' => $target,
                                    ]
                                ],
                                'containerClasses' => 'w-full'
                            ])
                        @else
                           @php
                               $information = serializePost($product['product_information']['product']);
                           @endphp

                            @include('partials.card', [
                                'data' => [
                                    'icon' => null,
                                    'title' => $information['title'],
                                    'url' => $product['product_information']['add_cta'] === 'self' ? $information['url'] : $product['product_information']['cta']['link']['url'],
                                    'description' => $information['excerpt'],
                                    'link_options' => $product['product_information']['add_cta'] !== 'self' ? 'add_link' : '',
                                    'post_link' => false,
                                    'add_link' => true,
                                    'link' => [
                                        'target' => '_self'
                                    ]
                                ],
                                'containerClasses' => 'w-full'
                            ])
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endif
