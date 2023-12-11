@if(count($slides) > 1)
    <div class="swiper stacked-carousel w-full" data-type="{{$type}}" data-alignment="{{$alignment}}">
        @include('partials/stacked-carousel/carousel-controls', ['type' => $type])
        <div class="swiper-wrapper">
            @foreach($slides as $index => $slide)
                @if($type === 'solid')
                    @include('partials/stacked-carousel/carousel-slide',['slide' => $slide, 'conditions' => $conditions])
                @else
                    @include('partials/stacked-carousel/blurred-slide',['slide' => $slide])
                @endif
            @endforeach
        </div>
        @include('partials/stacked-carousel/carousel-pagination')
    </div>
@elseif(count($slides) === 1)
    @if($type==='solid')
        @include('partials/stacked-carousel/carousel-slide',['slide' => $slides[0], 'conditions' => $conditions])
    @else
        @include('partials/stacked-carousel/blurred-slide',['slide' => $slides[0]])
    @endif
@endif
