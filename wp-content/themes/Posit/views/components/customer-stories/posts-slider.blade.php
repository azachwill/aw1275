@php
    $cols = 'col-span-12';
    $count = count($posts);

    switch($count) {
        case 2:
            $cols = 'col-span-6';
            break;
        case 3:
            $cols = 'col-span-4';
            break;
        case 4:
            $cols = 'col-span-3';
            break;
    }
@endphp

<div class="pb-[80px] lg:pb-[120px]">
    <div class="container hidden lg:grid lg:grid-cols-12 lg:gap-[28px]">
        @foreach($posts as $index => $post)
            <div class="{{ $cols }}">
                @include('components.customer-stories.post', [
                    'post' => $post,
                    'showDescription' => false,
                ])
            </div>
        @endforeach
    </div>

    <div
        data-type="slider"
        data-peek-before="60"
         data-desktop-views="3"
        class="glide block lg:hidden w-full pl-[20px] md:pl-[60px] lg:pl-0">
        <div class="glide__track overflow-hidden mt-[16px] lg:mt-[28px]" data-glide-el="track">
            <div class="flex gap-x-[16px]">
                @foreach($posts as $index => $post)
                    @include('components.customer-stories.post', [
                        'post' => $post,
                        'showDescription' => false,
                    ])
                @endforeach
            </div>
        </div>
    </div>
</div>
