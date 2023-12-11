@php
    $params = [];
    $dropdownOptions = [];
    $postArchive = 'false';
    $postType = $postObject ?? 'post';
    $filters = isset($filters) && is_array($filters)
        ? $filters
        : [];

    $isPage = is_page();
    $urlComponents = getURLParams();

    if (isset($urlComponents['query']) && is_string($urlComponents['query'])) {
        parse_str($urlComponents['query'], $params);
    }

    if (isset($_GET['archive']) && filter_var($_GET['archive'], FILTER_VALIDATE_BOOLEAN)) {
        $postArchive = 'true';
    }

    foreach (($filters['postTypes'] ?? []) as $index => $filter) {
        $items = [];
        $postObjectItems = get_posts(['post_type' => $filter[0], 'numberposts' => -1]);

        if (!is_array($postObjectItems)) {
            continue;
        }

        foreach ($postObjectItems as $i => $post) {
            $items [] = [
                'id' => $post->ID,
                'name' => $filter[1],
                'type' => 'post-type',
                'title' => $post->post_title,
            ];
        }

        $dropdownOptions[] = [
            'name' => $filter[1],
            'options' => $items,
        ];
    }

    foreach (($filters['taxonomies'] ?? []) as $index => $filter) {
        $items = [];
        $taxonomyTerms = get_terms_by_post_type([
            'taxonomy' => $filter,
            'order' => 'DESC',
            'orderby' => 'count',
            'hide_empty' => true,
            'post_types' => [$postType],
            'post_status' => $postArchive === 'true' ? 'archive' : 'publish'
        ]);

        if (!is_array($taxonomyTerms)) {
            continue;
        }

        foreach ($taxonomyTerms as $i => $term) {
            $items[] = [
                'type' => 'taxonomy',
                'name' => $filter,
                'slug' => $term->slug,
                'title' => $term->name,
                'id' => $term->term_id,
                'count' => $term->count,
            ];
        }

        $dropdownOptions[] = [
            'options' => $items,
            'name' => $filter !== 'post_tag'
                ? pluralize($filter)
                : 'tags',
        ];
    }
@endphp

<section class="bg-gray4/[.2]">
    <div
            data-post-type="{{ $postType }}"
            data-post-archive="{{ $postArchive }}"
            data-posts-per-page="{{ $postsPerPage }}"
            class="search-options-container container grid grid-cols-12 gap-[16px] py-[40px]">
        <div class="col-span-12 md:col-span-6 lg:col-span-4 relative">
            <input
                type="text"
                id="search"
                name="search"
                placeholder="Search"
                value="{{ !empty($params['search']) ? urldecode($params['search']) : '' }}"
                class="search-input body-md-regular w-full outline-none bg-neutral-light border border-gray4 rounded-[4px] px-[24px] py-[18px] focus:border-blue3 focus-visible:border-blue3 focus:shadow-select-focus focus-visible:shadow-select-focus"
            />
            <div class="flex items-center absolute top-[28px] right-[24px]">
                @include('partials.icons', [
                    'icon' => 'search'
                ])
            </div>
        </div>
        <div class="col-span-12 md:col-span-6 lg:col-span-4 lg:col-start-9 md:mt-0">
            <div class="relative w-full h-full">
                @include('partials.multiselect-with-sections', [
                   'hasSections' => true,
                   'isAbsolute' => true,
                   'additionalClasses' => 'w-full',
                   'buttonColor' => 'bg-neutral-light',
                   'dropdownOptions' => $dropdownOptions,
                ])
            </div>
        </div>
    </div>
</section>