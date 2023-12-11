<div class="container glide__arrows w-full hidden md:flex justify-end {{ $additionalClasses }}"
     data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left swiper-btn-prev btn-lg-icon mr-[8px]" data-glide-dir="<" aria-label="Go to previous slide">
        @include('partials.icons', [
            'icon' => 'right-bracket-fill',
            'class'=> 'w-[10px] h-[10px]'
        ])
    </button>
    <button class="glide__arrow glide__arrow--right swiper-btn-next btn-lg-icon" data-glide-dir=">" aria-label="Go to next slide">
        @include('partials.icons', [
                'icon' => 'left-bracket-fill',
                'class'=> 'w-[10px] h-[10px]'
            ])
    </button>
</div>
