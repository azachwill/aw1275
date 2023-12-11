@php
$class = isset($type) && $type === 'solid' ? 'justify-end' : 'absolute z-10 justify-between items-center top-[50%] transform translate-y-[-50%]';
@endphp

<div class="swiper-controls w-full hidden md:flex {{$class}} mb-[40px]">
    <button class="swiper-btn-prev btn-lg-icon mr-[8px]" aria-label="Go to Previous Slide">
        @include('partials.icons', [
            'icon' => 'right-bracket-fill',
            'class'=> 'w-[10px] h-[10px] swiper-btn-svg'
        ])
    </button>
    <button class="swiper-btn-next btn-lg-icon" aria-label="Go to Next Slide">
        @include('partials.icons', [
                'icon' => 'left-bracket-fill',
                'class'=> 'w-[10px] h-[10px] swiper-btn-svg'
            ])
    </button>
</div>
