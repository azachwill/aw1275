@if($tabs)
    <section class="container section-container grid grid-cols-12">
        <div class="tabs-component col-span-12">
            <div class="tabs flex border-b border-gray4 overflow-x-scroll">
                @foreach($tabs as $key => $tab)
                    <div class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px]">
                        <button
                            id="tab-{{ $key }}"
                            class="body-lg-regular text-blue1/[.62] px-[4px] pb-[16px] whitespace-nowrap focus-visible-link">
                                {{ $tab['name'] }}
                        </button>
                    </div>
                @endforeach
            </div>

            <div class="tabs-content-container overflow-hidden">
                @foreach($tabs as $key => $tab)
                    <div id="tab-content-{{ $key }}" class="tab-content hidden">
                        <section>
                            <div class="space-between-sections grid grid-cols-12">
                                <div class="col-span-12 lg:col-span-6">
                                    <h2 class="h1 text-blue1">
                                        {{ $tab['hero']['title'] }}
                                    </h2>
                                    @if($tab['hero']['description'])
                                        <div class="mt-[24px] wysiwyg-content text-blue1/[.62] body-lg-regular">
                                            {!! $tab['hero']['description'] !!}
                                        </div>
                                    @endif
                                     @if($tab['hero']['cta'])
                                        <div class="flex mt-[40px]">
                                            @include('partials.cta', [
                                                'data' => $tab['hero']['cta'],
                                                'additional_classes' => 'w-full md:w-auto'
                                            ])
                                        </div>
                                     @endif
                                </div>
                                <div class="relative col-span-12 md:col-span-7 lg:col-span-5 md:col-start-6 lg:col-start-8 mt-20 lg:mt-[120px]">
                                    @if($tab['hero']['secondary_images']['left_image'])
                                        <img class="absolute w-[205px] left-0 bottom-0" src="{{ $tab['hero']['secondary_images']['left_image']['url'] }}" alt="{{ $tab['hero']['secondary_images']['left_image']['alt'] }}"/>
                                    @endif
                                    @if($tab['hero']['secondary_images']['right_image'])
                                        <img class="absolute w-[156px] top-0 right-0" src="{{ $tab['hero']['secondary_images']['right_image']['url'] }}" alt="{{ $tab['hero']['secondary_images']['right_image']['alt'] }}"/>
                                    @endif
                                    @if($tab['hero']['principal_image'])
                                        <img class="p-[40px]" src="{{ $tab['hero']['principal_image']['url'] }}" alt="{{ $tab['hero']['principal_image']['alt'] }}"/>
                                    @endif
                                </div>
                            </div>
                        </section>

                        @include('components.product-detail.price-table', [
                            'header' => $tab['pricing_table']['header'],
                            'priceCards' => $tab['pricing_table']['price_cards']
                        ])

                         @include('components.sliding-cards', [
                            'title' => $tab['sliding_cards']['sliding_title'],
                            'content' => $tab['sliding_cards']['content'],
                            'contentCards' => $tab['sliding_cards']['cards'],
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif