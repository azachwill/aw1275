@php
    $data = isset($textBlocks) ? $textBlocks : false;
@endphp
<section id="our-people">
    <div class="container space-between-sections grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 lg:col-span-12 lg:max-w-[626px]">
            @include('partials.header', [
                'data' => $header
            ])
        </div>
        @if($data)
            <div class="blocks-container flex flex-col mt-[80px] md:mt-[120px] col-span-12 md:col-span-9 md:col-start-4 lg:col-span-6 lg:col-start-7">
                @foreach($data as $index => $block)
                    <div class="text-block w-[100%] mt-[40px] lg:mt-[80px] first-of-type:mt-0 border-b-[0.5px] border-blue1/[.4]">
                        @include('partials.block-card', [
                            'data' => $block
]                       )
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>