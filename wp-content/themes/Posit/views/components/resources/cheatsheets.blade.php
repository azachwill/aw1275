@php
    $terms = getTerms('cheatsheet_type');
    $translations = get_field('translations', 'options');
    $sideMenuContent = [];

    if ($translations) {
        foreach ($translations['content'] as $key => $menuItem) {
            array_push($sideMenuContent, ['label' => $menuItem['menu_title'],'link'=> '#translation-'.$key]);
        }
    }
@endphp

<section class="cheatsheets cheatsheets-cards">
    <div class="container space-between-sections grid grid-cols-12 gap-y-[80px] md:gap-x-[16px] lg:gap-x-[28px]">
        @if($terms)
            <div
                data-post-type="cheatsheets"
                data-posts-per-page="{{ $postsPerPage }}"
                class="tabs-component-container tabs-component col-span-12">
                {{-- tabs --}}
                <div class="tabs flex border-b border-gray4 overflow-x-scroll">
                    @foreach($terms as $key => $term)
                        <div data-name="{{ $term->slug }}" class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px]">
                            <button
                                id="tab-{{ $key }}"
                                data-slug="{{ $term->slug }}"
                                class="tab-with-pagination body-lg-regular text-blue1/[.62] px-[4px] py-[8px] whitespace-nowrap focus-visible-link">
                                    {{ $term->name }}
                            </button>
                        </div>
                    @endforeach
                    <div data-name="translations" class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px]">
                        <button
                            id="tab-{{ count($terms) }}"
                            class="translations-tab body-lg-regular text-blue1/[.62] px-[4px] py-[8px] [&:not(:first-of-type)]:ml-[48px] whitespace-nowrap focus-visible-link">
                                Translations
                        </button>
                    </div>
                </div>

                <div class="tabs-content-container">
                    @foreach($terms as $key => $term)
                        @php
                            $taxArg = getTaxonomyArg('cheatsheet_type', [$term->slug]);
                        @endphp
                        <div
                            id="tab-content-{{ $key }}"
                            data-slug="{{ $term->slug }}"
                            class="tab-content woooow hidden grid grid-cols-12 py-[80px] lg:py-[120px] gap-y-[120px] md:gap-x-[32px] lg:gap-x-[48px]">
                            {{-- data --}}
                        </div>
                    @endforeach

                    {{-- translations --}}
                    <div data-slug="translations" id="tab-content-{{ count($terms) }}" class="tab-content hidden grid grid-cols-12 px-[1px] lg:px-0 py-[40px] lg:py-[120px] md:gap-x-[16px] lg:gap-x-[28px]">

                        {{-- left menu --}}
                        <div class="col-span-12 lg:col-span-3">
                            <div class="flex flex-col sticky top-[80px] hidden lg:block">
                                @include('partials.table-of-content.list', ['contents' => $sideMenuContent])
                            </div>
                            <div class="flex flex-col top-[80px] sticky lg:hidden">
                                @include('partials.table-of-content.mobile-container',[
                                    'title'=> 'Translations Menu',
                                    'contents'=> $sideMenuContent,
                                    'content' => view('partials.table-of-content.list',['contents'=> $sideMenuContent]),
                                    'containerClasses' => 'bg-neutral-light col-span-12 lg:col-span-3 sticky top-0 pt-[16px] pb-[16px] lg:py-0 z-[2]'
                                ])
                            </div>
                        </div>

                        {{-- content --}}
                        <div class="col-span-12 lg:col-span-8 lg:col-start-5 lg:-mt-[120px]">
                            @if($translations)
                                @foreach($translations['content'] as $key => $item)
                                    <div id="translation-{{$key}}" class="pt-[80px] lg:pt-[120px]">
                                        <div>
                                            <h2 class="h3 text-blue1">
                                                {{ $item['text']['title'] }}
                                            </h2>
                                        </div>
                                        <div class="mt-[40px] wysiwyg-content">
                                            {!! $item['text']['description'] !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</section>