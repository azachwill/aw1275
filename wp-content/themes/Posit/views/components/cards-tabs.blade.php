@if($tabs)
    <section class="section-container container grid grid-cols-12">
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
                        @include('partials.cards-grid', [
                            'data' => $tab['cards_grid'],
                            'containerClasses' => 'mt-[60px] lg:mt-[80px]',
                        ])
                    </div>
                @endforeach
            </div>

            <div class="flex justify-end mt-[60px] lg:mt-[80px]">
                @include('partials.links.link', [
                   'data' => $ctaLink,
                ])
            </div>
        </div>
    </section>
@endif