@php
    $heading = 'h1';

    if (!empty($header['title_heading']['heading_tag'])){
        $heading = $header['title_heading']['heading_tag'];
    }
@endphp

<section class="download-hero">
    <div class="container grid grid-cols-12 space-between-sections">
        <div class="col-span-12 lg:col-span-6">
            @if (!empty($header['tag']))
                <p class="sh4 uppercase mb-[8px] text-blue1">
                    {{ $header['tag'] }}
                </p>
            @endif

        <{{$heading}} class="{{$heading}} text-blue1">
            {!! do_shortcode($header['title_heading']['title']) !!}
        </{{$heading}}>

        @if ($header['subtitle'])
            <div class="h5 mt-[24px] text-blue1">
                {{ $header['subtitle'] }}
            </div>
        @endif

        <div class="mt-[24px]">
            <div class="text-blue1/[.62] body-{{$header['description_size']}}-{{$header['description_style']}} link-p:link-light [&:not(:first-child)]:paragraphs:mt-[24px] break-words">
                {!! $header['description'] !!}
            </div>
        </div>

        @if($header['add_cta'])
            <div class="flex flex-col md:flex-row mt-[40px]">
                @foreach($header['cta'] as $index => $cta)
                    @include('partials.cta', [
                        'data' => $cta,
                        'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                    ])
                @endforeach
            </div>
        @endif
    </div>
</section>
