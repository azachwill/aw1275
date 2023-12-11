@php

@endphp
<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-4">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>
    
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-8 lg:col-start-5">
                {!! $greenhouseTag !!}
                {!! get_field('greenhouse_script_tag', 'options') !!}
            </div>
        </div>
    </div>
</section>
