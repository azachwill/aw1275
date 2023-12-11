@php
    $serializedListingContent = serializeListingContent($resources);
@endphp

<section class="posts-section share-modal-parent">
    <div class="container grid grid-cols-12 px-0 md:gap-x-[16px] lg:gap-x-[28px]">
        <div class="col-span-full grid grid-cols-12 px-[20px] md:px-[60px] lg:px-[80px] md:gap-x-[16px] lg:gap-x-[28px] pb-[80px]">
            @if($serializedListingContent)
                @if(count($serializedListingContent) === 1)
                    @include('components.customer-stories.post', [
                                'post' => $serializedListingContent[0],
                                'isMain' => false,
                            ])
                @elseif(count($serializedListingContent) === 2)
                    @foreach($serializedListingContent as $post)
                        @include('partials.post-slider-card', [
                                'post' => $post,
                                'size' => 'md',
                                'additionalClasses' => 'mt-[80px]',
                                'listingPage' => true
                        ])
                    @endforeach
                @else
                    @foreach($serializedListingContent as $index => $post)
                        @if($index === 0)
                            @include('components.customer-stories.post', [
                                'post' => $post,
                                'isMain' => false,
                            ])
                        @endif
                        @if($index < 3 && $index > 0)
                            @include('partials.post-slider-card', [
                                    'post' => $post,
                                    'size' => 'md',
                                    'additionalClasses' => 'mt-[80px]',
                                    'listingPage' => true
                            ])
                        @endif
                    @endforeach
                @endif
            @endif
        </div>
    </div>
    @include('partials.share-modal')
</section>