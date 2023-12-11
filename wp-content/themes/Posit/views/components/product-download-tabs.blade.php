@if($tabs)

    <section class="section-download-steps section-container container grid grid-cols-12">

        <div class="tabs-component col-span-12">

            <div class="tabs flex {{ $toggleTabNames ? 'border-b border-gray4' : 'h-0' }} overflow-x-scroll">

                @foreach($tabs as $key => $tab)

                    <div class="tab mt-[5px] first-of-type:ml-[5px] [&:not(:first-of-type)]:ml-[48px]">
                        <button
                            id="tab-{{ $key }}"
                            {{count($tabs) === 1 ? 'disabled' : ''}}
                            class="body-lg-regular text-blue1/[.62] px-[4px] pb-[16px] whitespace-nowrap focus-visible-link">
                             {{ $tab['name'] }}
                        </button>
                    </div>

                @endforeach

            </div>

            <div class="tabs-content-container">

                @foreach($tabs as $key => $tab)

                    <div id="tab-content-{{ $key }}" class="tab-content hidden">

                        @if($tab['steps'])

                            @foreach($tab['steps'] as $index => $step)

                                @if($step['download_process'] == 'os_version')

                                    <section class="download-content">

                                        @php
                                            $header = $step['header'];
                                            $versions = $step['os_version'];
                                        @endphp

                                        <div class="space-between-sections grid grid-cols-12">

                                            <div class="col-span-12 lg:col-span-6">

                                                <h2 class="h2 text-blue1">
                                                    {!! $header['title_heading']['title'] !!}
                                                </h2>

                                                @if($header['description'])
                                                    <div class="description mt-[24px] text-blue1/[.62] body-{{$header['description_size']}}-{{$header['description_style']}} link-p:link-light [&:not(:first-child)]:paragraphs:mt-[24px]">
                                                        {!! $header['description'] !!}
                                                    </div>
                                                @endif

                                                <div tabindex="0" class="select-dropdown max-w-[408px] mt-[40px] mb-[40px]">
                                                    <select class="download-versions">
                                                        @foreach($versions as $index => $version)
                                                            <option value="{{$index}}">{{ $version['name'] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                @if($header['add_cta'] && $header['cta'])
                                                    <div class="flex flex-col md:flex-row mt-[40px]">
                                                        @foreach($header['cta'] as $cta)
                                                            @include('partials.cta', [
                                                                'data' => $cta,
                                                                'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                                                            ])
                                                        @endforeach
                                                    </div>
                                                @endif

                                                @if ($header['add_download_cta'])
                                                    @php
                                                        $product = getProductDetails($header['select_download']['revision_select']);
                                                    @endphp
                                                    <div class="revision-content mt-[40px] flex flex-col">
                                                        <div>
                                                            @include('partials.cta', [
                                                                'data' => [
                                                                    'link' => [
                                                                        'url' => $product->url,
                                                                        'title' => $header['download_cta_title'],
                                                                        'target' => '_blank'
                                                                    ],
                                                                    'button_type' => 'primary',
                                                                    'button_size' => 'md',
                                                                ],
                                                                'additional_classes' => 'revision-content__cta flex md:inline-block'
                                                            ])
                                                        </div>
                                                        @if($header['include_revision_metadata'] && $product)
                                                            @include('partials.downloads.installer-information', compact('product'))
                                                        @endif
                                                    </div>
                                                @endif

                                            </div>

                                        </div>

                                        @foreach($versions as $index => $version)
                                            <div data-version="{{ $index }}" class="{{ $index === 0 ? 'block' : 'hidden' }}">
                                                @foreach($version['steps'] as $key => $versionStep)
                                                    @php
                                                        $versionStep = $versionStep['step'];
                                                    @endphp

                                                    @include('partials.downloads.step', [
                                                        'key' => $key,
                                                        'step' => $versionStep,
                                                    ])
                                                @endforeach
                                            </div>
                                        @endforeach

                                    </section>

                                @else

                                    <section class="download-content">

                                        @php
                                            $header = $step['header'];
                                            $downloadLinks = $step['download_links'];
                                        @endphp

                                        <div class="space-between-sections {{ is_single(5874) ? 'download-content__grid ' : '' }}grid grid-cols-12">

                                            <div class="col-span-12 {{ is_single(5874) ? 'md:col-span-12 lg:col-span-11' : 'lg:col-span-6' }}">

                                                <h2 class="h2 text-blue1">
                                                    {!! $header['title_heading']['title'] !!}
                                                </h2>

                                                @if ( $header['description'] )
                                                    <div class="mt-[24px] text-blue1/[.62] body-{{$header['description_size']}}-{{$header['description_style']}}">
                                                        {!! $header['description'] !!}
                                                    </div>
                                                @endif

                                                @if ( $header['add_cta'] )

                                                    <div class="mt-[40px]">

                                                        @foreach($header['cta'] as $cta)
                                                            @include('partials.cta', [
                                                                'data' => $cta,
                                                                'additional_classes' => 'inline-block'
                                                            ])
                                                        @endforeach

                                                    </div>

                                                @endif

                                            </div>

                                        </div>

                                        @foreach($downloadLinks as $key => $downloadLink)

                                            <div class="space-between-sections {{ is_single(5874) ? 'download-content__grid download-content__grid--child ' : '' }}grid grid-cols-12"
                                                 data-step="{{ $key }}">
                                                <div class="col-span-12 {{ is_single(5874) ? 'md:col-span-12 lg:col-span-11' : 'lg:col-span-6' }}">
                                                    @include('partials.header', [
                                                        'data' => $downloadLink,
                                                        'buttonContainerClasses' => 'flex flex-col md:flex-row',
                                                        'button_classes' => 'sm:first-of-type:mr-0 md:first-of-type:mr-[16px] first-of-type:mb-[16px] md:first-of-type:mb-0',
                                                    ])
                                                </div>
                                            </div>

                                        @endforeach

                                    </section>

                                @endif

                            @endforeach

                        @endif

                    </div>

                @endforeach
                 
            </div>

        </div><!-- .tabs-component -->

    </section><!-- .section-download-steps -->

    @if($includeDownloadTable)
        @include('partials.download-table', [
            'product' => $product,
            'includeSourceCodeSection' => $includeSourceCodeSection,
            'sourceCodeSectionTitle' => $sourceCodeSectionTitle,
            'sourceCodeSectionDescription' => $sourceCodeSectionDescription,
            'expandableTitle' => $expandableTitle,
            'tableTitle' => $tableTitle,
            'tableDescription' => $tableDescription
        ])
    @endif

@endif
