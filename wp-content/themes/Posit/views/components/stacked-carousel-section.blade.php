@php
$carouselContainerSize = $type === 'solid' ? 'md:col-span-10 lg:col-span-10': 'md:col-span-8 lg:col-span-8';
$offsetOrder = isset($alignment) && $alignment ==='left' ? 'order-2' : 'order-1';
$carouselOrder = isset($alignment) && $alignment === 'left' ? 'order-1' : 'order-2';
@endphp

<section class="stack-carousel-section space-between-sections overflow-x-hidden">
    @if(isset($conditions) && $conditions['has_title'] && $header)
        <div class="container grid grid-cols-12">
            <div class="col-span-12 md:col-span-8 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>
    @endif
    <div class="container grid grid-cols-12 mt-[40px]">
        <div class="col-span-0 md:col-span-2 lg:col-span-2 stack-carousel-offset {{$offsetOrder}}"></div>
        <div class="col-span-12 {{$carouselOrder}} {{$carouselContainerSize}}">
            @include('components/stack-carousel',[
                'type' => $type,
                'slides' => $slides,
                'alignment' => $alignment ?? null,
                'conditions' => $conditions ?? null
            ])
        </div>
    </div>
</section>
