@php
    $isMain = boolval($index === 0);
    $cols = !$isMain ? 'md:col-span-6' : '';
    $speakers = $post['customData']['conference_details']['speakers'];
@endphp

<div class="post-card relative flex flex-col col-span-12 {{ $cols }} {{ $isMain ? 'gap-[28px]' : '' }}">
    <a href="{{$post['url']}}" class="absolute top-0 bottom-0 right-0 left-0 z-10" aria-label="Link to {{ $post['title'] }}"></a>
    @if($isMain)
        <div class="col-span-full h-fit">
            <div class="overflow-hidden rounded-lg mt-[16px] ">
                <img class="object-cover aspect-video w-full" src="{{$post['image']}}" alt="{{$post['imageAlt']}}"/>
            </div>
        </div>
    @endif
    <div class="col-span-full h-full">
        <div class="flex flex-wrap mt-[16px] gap-[8px] uppercase {{ $isMain ? 'md:mt-[27px]' : '' }}">
             @if($post['postType'])
                 <div class="flex">
                     <div class="body-sm-semibold text-blue1">
                       {{$post['postType']}}
                     </div>
                     <div class="ml-[4px] body-sm-semibold text-gray4/80">
                       |
                     </div>
                 </div>
             @endif
             @if($speakers)
                 @foreach ($speakers as $speaker)
                     <div class="flex">
                         <div class="body-sm-semibold text-blue1">
                           {{ $speaker->post_title }}
                         </div>
                         <div class="ml-[4px] body-sm-semibold text-gray4/80">
                           |
                         </div>
                     </div>
                 @endforeach
             @endif
        </div>
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
        <div class="mt-[8px] body-md-regular text-blue1/[.62]">
            {{ $post['excerpt'] }}
        </div>
    </div>
</div>
