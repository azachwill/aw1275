<section>
    <div class="container grid grid-cols-12 gap-[28px] pb-[40px] md:pb-[80px]">
        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
            @foreach($postContent['content'] as $content)
                @if($content['content_type'] == 'quote')
                    <div class="mt-[80px] py-[40px] md:py-[80px] px-[20px] lg:px-[40px] rounded-lg bg-blue2 text-neutral-light">
                        <div class="h4">
                            {{ $content['quote_content']['quote'] }}
                        </div>
                        <div class="h6-regular mt-[32px] lg:mt-[80px]">
                            {{ $content['quote_content']['author'] }}
                        </div>
                        <div class="h6 mt-[8px]">
                            {{ $content['quote_content']['job_position'] }}
                        </div>
                    </div>
                @else
                    <div class="pt-[80px]">
                        @if($content['tag'])
                            <div class="mb-[8px] sh4 text-blue1 uppercase">
                                {{ $content['tag'] }}
                            </div>
                        @endif
                        @if($content['title'])
                            <div class="h3 text-blue1">
                                {{ $content['title'] }}
                            </div>
                        @endif
                        @if($content['description'])
                            <div class="mt-[24px] lg:mt-[40px] text-blue1 wysiwyg-content">
                                {!! $content['description'] !!}
                            </div>
                        @endif
                    </div>
                @endif
                @if($content['content_type'] == 'video')
                    <div class="mt-[40px] md:mt-[24px] lg:mt-[40px]">
                        {!! $content['video'] !!}
                    </div>
                @elseif($content['content_type'] == 'image')
                    <div class="mt-[40px] md:mt-[24px] lg:mt-[40px]">
                        @if($content['image_content']['image_title'])
                            <div class="mb-[16px] h4-regular text-blue1">
                                {{ $content['image_content']['image_title'] }}
                            </div>
                        @endif
                        <img class="w-full rounded-lg"
                             src="{{ $content['image_content']['image']['url'] }}"
                             alt="{{ $content['image_content']['image']['alt'] }}">
                        @if($content['image_content']['image_description'])
                            <div class="mt-[16px] body-md-regular text-blue1/[.62]">
                                {{ $content['image_content']['image_description'] }}
                            </div>
                        @endif
                    </div>
                @endif
            @endforeach
            
            @include('partials.post-tags', [
                'postTags' => $postTags,
                'iframe' => false,
                'type' => 'post'
            ])
        </div>
    </div>
</section>