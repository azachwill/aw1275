@php
    $mediaType              = $media['type'];
    $mediaPosition          = $media['position'];

    $image                  = $media['image'];
    $imageFile              = $image['file'];

    $video                  = $media['video'];
    $videoCode              = $video['embed_code'];

    $lottie                 = $media['lottie'];
    $lottieFile             = $lottie['file'];
    $lottieOptions          = $lottie['options'];

    $brandLogo              = $media['toggle_brand_logo'];

    $gridProps              = '';

    if ( $mediaPosition == 'right' ) {
        // Default classes when $media['position'] is true.
        $gridProps = 'md:col-start-6 md:col-end-13 lg:col-start-8 lg:mt-[40px]';
    }
@endphp

<div class="header-media lg:mt-[80px] relative col-span-12 {{ $gridProps }}">

    @if ( $mediaType == 'image' )

        <img class="w-screen rounded-lg" src="{{ $imageFile['url'] }}" alt="{{ $imageFile['alt'] }}">

    @elseif ( $mediaType == 'video' )

        @if ( $videoCode )
        <div class="responsive-embed rounded-lg">
            {!! $videoCode !!}
        </div>
        @endif

    @elseif ( $mediaType == 'lottie' )

        <lottie-player
            {{ implode(" ", $lottieOptions) }}
            src="{{ $lottieFile }}"
        >
        </lottie-player>

    @endif
</div>