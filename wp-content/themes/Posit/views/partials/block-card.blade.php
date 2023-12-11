@php
 $block = $data['text_block']
@endphp

<div class="block-card">
    <h3 class="h3-regular blue1 flex">
        {{ $block['title'] }}
    </h3>
    <p class="mt-[16px] mb-[40px] text-blue1/[.62] body-lg-regular">
        {{ $block['description'] }}
    </p>
    @if($block['add_cta'])

        @php
            $ctaData = $block['cta'];
            $cta = $ctaData['cta'];
        @endphp

        <div class="mb-[40px]">
            @include('partials.links.link', [
               'size' => 'md',
               'style' => 'light',
               'data' => $cta
            ])
        </div>
    @endif
</div>