<section class="article section pt-[40px] [&:last-of-type]:pb-[80px]">
    <div class="container grid grid-cols-12">
        <div class="col-span-12 lg:col-span-8 lg:col-start-3">
            @if($tag)
                <span class="sh4 uppercase">
                    {{ $tag }}
                </span>
            @endif

            @if($title)
                <h2 class="h3 mb-[24px] lg:mb-[40px] {{ $tag ? 'mt-[8px]' : '' }}">
                    {{ $title }}
                </h2>
            @endif

            <div class="wysiwyg-content body-md-regular text-blue1">
                {!! $description !!}
            </div>

            @if( $mediaChoice != 'none' )
            <div class="article-media body-md-regular text-blue1 mt-[24px] lg:mt-[40px]">

                @if ( $mediaChoice === 'video' && !empty($video) )
                    {!! $video !!}
                @endif

                @if($mediaChoice === 'image' && $image)
                    @if( $image['title'] )
                        <h3 class="h4-regular text-blue1 mb-[16px]">
                            {{ $image['title'] }}
                        </h3>
                    @endif

                    <img class="roudned-lg" src="{{ $image['image']['url'] }}" alt="{{ $image['image']['alt'] }}"/>

                    <p class="body-md-regular text-blue1/[.62] mt-[16px]">
                        {{ $image['image_detail'] }}
                    </p>
                @endif
            </div>
            @endif

        </div>
    </div>
</section>
