@extends('master')

@php
    $query = [
        'order' => 'desc',
        'posts_per_page' => -1,
        'post_type' => 'release_notes',
    ];

    $releases = get_posts($query);
    $latest = array_shift($releases);
@endphp

@section('content')

    <section class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 md:col-span-10 md:col-start-1 lg:col-span-8 lg:col-start-2">
                @php
                    $details = get_field('release_note_details', $latest->ID);

                    $subtitle = $details['nice_name'] ? (' "' . $details['nice_name'] . '", ') : '';
                    $subtitle .= $details['release_date'];
                @endphp

                <h2 class="h2">{{ $details['version_title'] }}</h2>
                <h3 class="h5">{{ $subtitle }}</h3>

                <div class="wysiwyg-content mt-[60px]">
                    {!! $details['changelog'] !!}
                </div>
            </div>
        </div>
    </section>

    <section class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <h3 class="h3">Previous Release Notes</h3>
            </div>
        </div>

        <div class="accordion grid grid-cols-12 space-between-sections">
            <div class="col-span-12">
                @foreach($releases as $index => $release)
                    @php
                        $details = get_field('release_note_details', $release->ID);

                        $title = $details['version_title'];
                        $title .= $details['nice_name'] ? (', ' . $details['nice_name']) : '';
                        $title .= ' - ' . $details['release_date'];
                    @endphp

                    <div class="accordion-tab bg-gray4/20 mt-[8px] first-of-type:mt-0 transition-colors duration-300 hover:bg-blue3/[.1] active:bg-blue3/[.2] rounded-[8px] focus-within:shadow-focus-accordion outline-0">
                        <div class="accordion rounded-[8px] flex flex-row justify-between w-full cursor-pointer transition-height duration-300 text-left py-[24px] px-[24px] lg:px-[32px] lg:py-[32px] outline-0" tabindex="0" role="button">

                            <h3 class="h5 mr-[36px]">{{ $title }}</h3>

                            @include('partials.icons', [
                                'icon' => 'plus',
                                'class' => 'plus-icon mt-[15px] transition-all duration-300'
                            ])
                            @include('partials.icons', [
                                'icon' => 'minus',
                                'class' => 'minus-icon mt-[25px] hidden'
                            ])
                        </div>
                        <div class="answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="wysiwyg-content px-[24px] pb-[24px] lg:px-[32px] lg:pb-[32px] text-neutral-dark/[.62]">
                                {!! $details['changelog'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection