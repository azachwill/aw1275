<section>
    @include('components.search.options', [
        'filters' => $filters,
        'postObject' => $postObject,
        'postsPerPage' => $postsPerPage,
    ])

    <div class="container">
       <div class="posts-container grid grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px] gap-y-[80px] {{ $additionalClasses ?? '' }} py-[80px] md:py-[120px]" />
    </div>
</section>