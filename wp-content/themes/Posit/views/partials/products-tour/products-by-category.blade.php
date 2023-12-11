@if($categories)
    @foreach($categories as $index => $category)
        @php
            $cleanCategory = serializeTerm($category);
            $productArgs = getTaxonomyArg('segments', [$category->slug]);
            $entries = productSegmentTaxonomyRequest($productArgs, 'product');
        @endphp

        <div class="category mb-[120px] lg:mb-[200px] last-of-type:mb-0">
            <div class="category-header">
                @if($cleanCategory['customData']['image'])
                    <img class="max-w-[60px] h-[60px] w-full object-contain max-h-min"
                         src="{{ $cleanCategory['customData']['image']['url'] }}"
                         alt="{{$cleanCategory['customData']['image']['alt']}}">
                @endif
                @if($cleanCategory['customData']['subtitle'])
                    <h3 class="h3 mt-[40px]">
                        {{ $cleanCategory['customData']['subtitle'] }}
                    </h3>
                @endif
                <p class="wysiwyg-content body-md-regular text-neutral-blue62 mt-[24px]">
                    {!! $cleanCategory['excerpt'] !!}
                </p>
                @include('partials.cta', [
                      'data' => [
                         'link' => [
                            'title' => !!$cleanCategory['customData']['cta_title'] ? $cleanCategory['customData']['cta_title'] : 'Go to category overview',
                            'url' => $cleanCategory['url'],
                            'target' => '_self'
                        ],
                        'button_type' => 'primary',
                        'button_size' => 'md'
                    ],
                    'additional_classes' => 'uppercase inline-block mt-[40px]'
                  ])
            </div>

            <div class="grid grid-cols-2 gap-x-[8px] md:gap-x-[16px] lg:gap-x-[28px] gap-y-[16px] lg:gap-y-[24px] mt-[80px]">
                @foreach($entries as $index => $entry)
                    <div class="col-span-2 lg:col-span-1 flex">
                        @include('partials.card', [
                            'data' => [
                                'icon' => null,
                                'title' => $entry['title'],
                                'url' => $entry['url'],
                                'description' => $entry['excerpt'],
                                'link_options' => '',
                                'post_link' => true,
                                'add_link' => true,
                            ],
                            'containerClasses' => 'w-full'
                       ])
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
@endif
