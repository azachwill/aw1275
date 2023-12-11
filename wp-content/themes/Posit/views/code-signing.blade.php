@php
    $hero = get_field('hero');
    $instructions = get_field('instructions');
@endphp

@extends('master')

@section('content')
    <section class="code-signing section text-blue1">
        <div class="container grid grid-cols-12">
            <div class="col-span-12 lg:col-span-8 lg:col-start-3 mt-[80px] lg:mt-[120px]">
                <div>
                    <h1 class="h2">
                        {{ $hero['title'] }}
                    </h1>
                    <div class="mt-[40px] wysiwyg-content">
                        {!! $hero['description'] !!}
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container grid grid-cols-12 mb-[80px] lg:mb-[120px]">
            <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                @foreach($instructions as $instruction)
                    <div class="mt-[80px] lg:mt-[120px]">
                        <div>
                            <h2 class="h3">
                                {{ $instruction['title'] }}
                            </h2>
                        </div>
                        @foreach($instruction['content'] as $content)
                            <div class="mt-[40px]">

                                @if ( $content['subtitle'] )
                                <h3 class="h6-regular">
                                    {{ $content['subtitle'] }}
                                </h3>
                                @endif
                                
                                @if ( $content['description'] )
                                <p class="body-md-regular link:link-light mt-[12px] mb-[32px]">
                                    {!! $content['description'] !!}
                                </p>
                                @endif

                                @if ( $content['type'] == 'technical-tabs' )

                                @include('components.technical-tabs', [
                                    'technicalTabs' => $content['tech_tabs']['technical_tabs']
                                ])

                                @else
    
                                <div class="flex flex-col md:flex-row justify-between mt-[24px] px-[16px] py-[40px] lg:px-[40px] bg-gray4/[.2] rounded-[8px]" data-component-id="code-snippet">
                                    <div class="flex flex-row justify-between md:hidden mb-[28px]">
                                        @include('partials.icons', [
                                          'icon' => 'snippet-arrow',
                                          'class' => 'snippet-arrow'
                                      ])
                                        <button class="mobile-copy-button relative" aria-label="Copy snippet to clipboard">
                                            @include('partials.icons', [
                                                'icon' => 'copy-snippet',
                                                'class' => 'copy-snippet'
                                            ])
                                        </button>
                                    </div>
                                    <div class="flex flex-row">
                                        <div class="hidden md:flex md:pr-[28px]">
                                            @include('partials.icons', [
                                                'icon' => 'snippet-arrow',
                                            ])
                                        </div>
                                        <div class="code-snippet">
                                            <p class="ui-medium text-blue1/[.62] max-w-[545px] break-words break-all">
                                                {!! $content['code_snippet'] !!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="self-center hidden md:flex md:pl-[28px]">
                                        <button class="copy-button relative" aria-label="Copy snippet to clipboard">
                                            @include('partials.icons', [
                                                'icon' => 'copy-snippet',
                                            ])
                                        </button>
                                    </div>
                                </div>

                                @endif

                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection