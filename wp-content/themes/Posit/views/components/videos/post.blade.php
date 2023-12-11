<div class="post-card relative flex flex-col col-span-12 md:col-span-6 gap-x-[28px]">
    <a href="{{$post['url']}}" class="absolute top-0 bottom-0 right-0 left-0 z-10" aria-label="Link to {{ $post['title'] }}"></a>
    <div class="col-span-full h-fit">
        <div class="flex flex-wrap gap-[8px] text-blue2 uppercase">
            @if($post['categories'])
                @foreach($post['categories'] as $index => $category)
                     <div class="ui-medium-semibold px-[16px] py-[4px] bg-blue3/10 rounded">
                         {{ $category['name'] }}
                     </div>
                @endforeach
            @endif
        </div>
        <div class="overflow-hidden rounded-lg mt-[16px] ">
            <img class="object-cover w-full" src="{{$post['image']}}" alt="{{$post['imageAlt']}}"/>
        </div>
    </div>
    <div class="col-span-full h-full">
        <div class="flex flex-wrap mt-[16px] gap-[8px] uppercase">
            <div class="flex">
                <div class="body-sm-semibold text-blue1">
                     {{ $post['postType'] }}
                </div>
                <div class="ml-[4px] body-sm-semibold text-gray4/80">
                     |
                </div>
                @if($post['authors'])
                    @foreach($post['authors'] as $index => $author)
                         <div class="body-sm-semibold text-blue1">
                             {{ $author->post_title }}
                         </div>
                         <div class="ml-[4px] body-sm-semibold text-gray4/80">
                             |
                         </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="flex justify-between mt-[16px]">
            <div class="h4 text-blue1">
                {{ $post['title'] }}
            </div>
            <a href="#" class="btn-share-modal ml-[4px] h-fit z-10 rounded-lg hover:bg-gray4/40" aria-label="Share {{ $post['title'] }}">
               @include('partials.icons', [
                   'icon' => 'share',
                   'class' => 'w-[44px] h-[44px] p-[10px]'
               ])
            </a>
        </div>
        <div class="mt-[8px] body-md-regular text-blue1/[.62]">
            {{ $post['excerpt'] }}
        </div>
        <div class="flex justify-between mt-[16px] body-md-regular text-blue1">
            <div>
                {{ date('m/d/Y', strtotime($post['publishDate'])) }}
            </div>
        </div>
    </div>
</div>
