@php
    $countPosts = count($posts);
    $listingPage = $listingPage ?? false;
    $isChampion = $isChampion ?? false;
@endphp

<div class="glide block w-full {{$isChampion ? 'w-[calc(100%+20px)] md:w-[calc(100%+60px)] lg:w-[calc(100%+80px)]' : 'pl-[20px] md:pl-[60px]'}} {{!$isChampion && $countPosts < 4 ? 'lg:container': 'lg:pl-0'}}"
     data-track-overflow="{{ $isChampion }}" data-type="slider" data-desktop-views="{{ $isChampion ? 2.6 : 3 }}"
     data-peek-before="{{ $isChampion ? 0 : ($countPosts < 4 ? "0" : "80")}}" data-peek-after="{{ $isChampion ? 60 : ($countPosts < 4 ? "0" : "60") }}">

    <!-- Controls -->
    @include('partials.slider-controls', [
        'additionalClasses' => $isChampion ? 'md:hidden lg:flex max-w-[916px] ml-0' : ($countPosts < 3 ? 'md:hidden' : ($countPosts < 4 ? 'lg:hidden': ''))
    ])

    <!-- Slider -->
    <div class="glide__track overflow-hidden mt-[16px] {{ $isChampion ? 'lg:mt-[32px]' : 'lg:mt-[28px]' }} lg:py-[7px]" data-glide-el="track">
        <div class="flex md:gap-x-[16px] lg:gap-x-[28px] ml-[2px]">
            @foreach($posts as $post)
                @if($isChampion)
                    @php
                        $post = serializePost($post['post']);
                    @endphp
                @endif
                @include('partials.post-slider-card', [
                    'post' => $post,
                    'size' => $size,
                    'listingPage' => $listingPage,
                    'isChampion' => $isChampion
                ])
            @endforeach
        </div>
    </div>
</div>
