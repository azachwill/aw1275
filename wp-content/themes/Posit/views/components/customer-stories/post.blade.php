@php
    $size = "md:col-span-4";
    $isMain = $isMain ?? false;
    $showDescription = $showDescription ?? true;
    $industries = get_the_terms($post['ID'], 'industries');

    if(!$isMain && $index) {
        if ($index === 1 || $index === 2) {
           $size = 'md:col-span-6';
        } else if ($index === 0) {
            $size = '';
        }
    } else {
        $size = '';
    }

    $cols = $isMain ? 'md:col-span-6' : '';
@endphp

<div class="post-card relative flex flex-col col-span-12 {{ $size }} {{ $isMain ? 'gap-[28px]' : '' }}">
    <a href="{{$post['url']}}" class="absolute top-0 bottom-0 right-0 left-0 z-10" aria-label="Link to {{$product->post_title}}"></a>
    <div class="col-span-full {{ $cols }} h-fit">
        <div class="flex flex-wrap gap-[8px] text-blue2 uppercase h-[68px] overflow-hidden items-end">
            @if($industries)
                @foreach($industries as $index => $industry)
                     <label class="ui-medium-semibold px-[16px] py-[4px] bg-blue3/10 rounded">
                         {{ $industry->name }}
                     </label>
                @endforeach
            @endif
        </div>
        <div class="overflow-hidden rounded-lg mt-[16px] ">
            <img class="object-cover aspect-video w-full" src="{{$post['image']}}" alt="{{$post['imageAlt']}}"/>
        </div>
    </div>
    <div class="col-span-full {{ $cols }} h-full">
        @if($post['customData'])
            <div class="flex flex-wrap mt-[16px] gap-[8px] uppercase {{ $isMain ? 'md:mt-[27px]' : '' }}">
                <div class="flex">
                    @if($post['customData']['products'])
                        @foreach($post['customData']['products'] as $index => $product)
                             <a href="{{ $product->guid }}" class="body-sm-semibold text-blue1">
                                 {{ $product->post_title }}
                             </a>
                             <div class="ml-[4px] body-sm-semibold text-gray4/80">
                                 |
                             </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
        <div class="flex justify-between mt-[16px]">
            <div class="h4 text-blue1">
                {{ $post['title'] }}
            </div>
            <button type="button" class="btn-share-modal ml-[4px] h-fit z-20 rounded-lg hover:bg-gray4/40" aria-label="Share {{ $post['title'] }}" data-title="{{ $post['title'] }}" data-url="{{$post['url']}}">
                @include('partials.icons', [
                    'icon' => 'share',
                    'class' => 'w-[44px] h-[44px] p-[10px]'
                ])
            </button>
        </div>
        @if($showDescription)
            <div class="mt-[8px] body-md-regular text-neutral-blue62">
                {{ $post['excerpt'] }}
            </div>
        @endif
    </div>
</div>
