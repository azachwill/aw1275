@php
    $left = true;
    $below = false;
    if ($imagePosition === 'right') $left = false;
    if ($textPosition === 'text_above') $below = true;

    $heading = 'h2';

    if (!empty($headingTag)){
        $heading = $headingTag;
    }
@endphp

<section class="text-illustrated">
    <div class="container space-between-sections grid grid-cols-12">
        <div class="col-span-12 md:col-span-7 lg:col-span-4 {{!$left ? 'lg:col-start-9' : ''}} {{ $below ? 'order-2 lg:order-none mt-[155px] md:mt-[70px] lg:mt-0' : '' }}">
            @if(!empty($image))
                <img class="w-full" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            @endif
        </div>
        <div class="col-span-12 lg:col-span-7 {{!$left ? 'lg:col-start-1 lg:row-start-1' : 'lg:col-start-7'}} mt-[40px] lg:mt-0 lg:flex lg:flex-col lg:justify-center">
            <{{$heading}} class="h2 text-blue1">
                {!! $title !!}
            </{{$heading}}>

            <div class="mt-[24px] wysiwyg-content">
                {!! $description !!}
            </div>
            @if ($cta)
                <div class="mt-[40px] flex">
                    @include('partials.cta', [
                            'data' => $cta['cta'],
                            'additional_classes' => 'w-full md:w-auto'
                        ])
                </div>
            @endif
        </div>
    </div>
</section>
