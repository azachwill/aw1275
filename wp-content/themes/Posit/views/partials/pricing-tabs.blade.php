@php
    $post = get_post();
    $parent = $post->post_parent ?: $post->ID;
    $fields = get_fields($post->ID);
    $children = get_pricing_filtered_children($parent);
    $filteredChildren = array_filter($children, "filter_children_by_custom_field");
@endphp

@if(($post->post_parent === 0 || $fields['page_as_tab_on_main_pricing_page']) && count($filteredChildren) > 0)
    <section class="container grid grid-cols-12">
        <div class="col-span-12">
            <div class="tabs flex border-b border-gray4 overflow-x-auto">
                @foreach($filteredChildren as $key => $tab)
                    <div class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px] h-[51px] {{ $tab['ID'] === $post->ID ? 'active' : '' }}">
                        <a
                            class="body-lg-regular text-blue1/[.62] whitespace-nowrap px-[4px] pb-[16px] focus-visible-link"
                            href="{{ get_the_permalink($tab['ID']) }}"
                        >
                            {{ $tab['post_title'] }}
                        </a>
                    </div>
                @endforeach
                <div class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px] h-[51px] {{ $post->ID == $parent ? 'active' : '' }}">
                    <a
                        class="body-lg-regular text-blue1/[.62] whitespace-nowrap px-[4px] pb-[16px] focus-visible-link"
                        href="{{ get_the_permalink($parent) }}"
                    >
                        Enterprise
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif
