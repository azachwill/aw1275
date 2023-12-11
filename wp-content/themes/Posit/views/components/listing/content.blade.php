@php
    $serializedListingContent = serializeListingContent($resources);
@endphp

<section class="posts-section share-modal-parent">
    @if($serializedListingContent)
        @include('partials.posts-slider', [
            'posts' => $serializedListingContent,
            'addImages' => true,
            'size' => 'sm',
            'listingPage' => true
        ])
    @endif

    @include('partials.share-modal')
</section>