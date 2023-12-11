@extends('splash-master-feature')

@section('content')
    <div id="fullpage" class="testing-feature relative">
        @include('splash.logo')
        @include('splash.meet-us')
        @include('splash.benefits-header')
        @include('splash.benefits')
        @include('splash.impact-video')
        @include('splash.launch-date')
        @include('splash.contact-form')
        
        {{--  fixed logo --}}
        <div id="hero-logo" class="fixed opacity-0 z-10 left-1/2 -translate-x-1/2 top-[100vh]">
            <div class="flex justify-center items-center">
                <div>
                    @include('partials.icons', [
                        'icon' => 'main-logo-arrows',
                        'class' => 'w-[57px] h-[57px] md:w-[120px] md:h-[120px]'
                    ])
                </div>
                <div id="reveal-logo"
                     class="relative ml-[18px] md:ml-[37px] md:h-[120px] overflow-hidden invisible hidden">
                    @include('partials.icons', [
                        'icon' => 'main-logo',
                        'class' => 'w-full h-full'
                    ])
                </div>
            </div>
        </div>
    </div>
@endsection