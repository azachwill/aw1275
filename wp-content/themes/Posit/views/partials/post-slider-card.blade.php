@php
    $columns = $size == 'lg' ? "col-span-full md:col-span-12 "
    : ($size == 'md' ? "col-span-full md:col-span-6"
    : ($size == 'sm' ? "col-span-full md:col-span-6 lg:col-span-4"
    : "col-span-11 md:col-span-4 lg:col-span-3"));

    $imageClasses = $imageClasses ?? ($size == 'lg' ? "max-h-[188px] md:max-h-[193px] lg:max-h-[352px]"
    : ($size == 'md' ? "max-h-[188px] md:max-h-[193px] lg:max-h-[352px]"
    : ($size == 'sm' ? "max-h-[172px] md:max-h-[196px] lg:max-h-[230px] xl:max-h-[400px]"
    : "max-h-[128px] lg:max-h-[168px]")));

    $additionalClasses = $additionalClasses ?? '';
    $addImage = !isset($addImages) || $addImages;
    $isCheatSheet = $post['postType'] == 'Cheatsheet';
    $listingPage = $listingPage ?? false;
    $isChampion = $isChampion ?? false;
    $isVideo = $post['postType'] == 'Video';
@endphp

@if ( !$isCheatSheet )
    @include('partials.post-slider.card')
@else
    @include('partials.post-slider.cheatsheet-card')
@endif
