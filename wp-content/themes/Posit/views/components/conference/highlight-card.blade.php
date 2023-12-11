@php
    $maxHeight = $imagesContent['aspect_ratio'] == 'object-cover' ? 'max-h-[162px] lg:max-h-[168px]' : 'h-[150px] lg:h-[150px] min-w-[150px]';
@endphp
<div class="glide__slide grid gap-y-[10px] {{ $maxHeight }}">
    <img class="w-full {{ $maxHeight }} aspect-video {{ $aspectImage }} rounded-lg"
         src="{{ $image['image']['url'] }}" alt="{{ $image['image']['alt'] }}"/>
    @if(!empty($image['footer']))
        <div class="body-md-regular text-blue1/[.62]">
            {{ $image['footer'] }}
        </div>
    @endif
</div>