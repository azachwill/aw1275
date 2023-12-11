@extends('master')

@section('content')
    <div class="container">
        <div class="mt-[40px]">
            <a class="link link-sm-light lg:link-md-light before:!h-0" href="javascript: history.go(-1)" aria-label="Back to careers">
                @include('partials.icons', [
                    'icon' => 'link-arrow-left',
                    'class' => 'mr-[4px]'
                ])
                Back to
            </a>
        </div>
        
        {!! get_field('greenhouse_html_tag') !!}
        {!! get_field('greenhouse_script_tag', 'options') !!}
    </div>
@endsection
