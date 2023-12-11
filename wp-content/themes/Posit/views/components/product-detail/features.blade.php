@php
    $header['description'] = $description ?? '';
    $header['description_size'] = 'md';
    $header['description_style'] = 'regular';
@endphp

<section class="features">
    <div class="grid grid-cols-12 container {{$mediaPosition === 'left' ? 'lg:rtl': ''}} space-between-sections md:gap-x-[16px] lg:gap-x-[28px]">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-5 text-left lg:ltr',
        ])
        <div class="col-span-12 md:col-start-3 lg:col-start-7 md:col-end-13 mt-[60px] md:mt-[80px] lg:mt-[120px]">
            @if($media)
                @if($media['type'] === 'image')
                    <img class="media object-cover" src="{{$media['url']}}" alt="{{ $media['alt']}}">
                @else
                    <video src="{{$media['url']}}"
                        class="media object-cover"
                        autoplay loop muted>
                    </video>
                @endif
            @endif
        </div>
    </div>
</section>