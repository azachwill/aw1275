@php
    $launch = get_field('launch_date');
@endphp

<section id="launch-date" class="section overflow-hidden" data-anchor="launch-date">
    <div class="section-container flex justify-center items-center h-full bg-blue1">
        <div class="max-w-[868px] launch-container">
            <div class="text-blue6 text-center hidden md:block heading-container">
                {!! $launch['desktop_text'] !!}
            </div>
            <div class="text-blue6 text-center md:hidden heading-container">
                {!! $launch['mobile_text'] !!}
            </div>
        </div>
    </div>
</section>