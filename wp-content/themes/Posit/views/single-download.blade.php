@extends('master')

@section('content')
        @while( have_posts() )
            @php
                the_post();
                $cards = get_field('card_grid', 'options');
            @endphp
            @while (have_rows('download_section'))
                @php the_row(); @endphp

                @if(get_row_layout() == 'download_hero')
                    @include('components.download-hero', [
                    'header' => get_sub_field('header')
                ])

                @elseif(get_row_layout() == 'download_step')
                    <section class="download-step">
                        @include('partials.downloads.step', [
                            'step' => get_sub_field('step'),
                            'isSection' => true,
                        ])
                    </section>

                @elseif(get_row_layout() == 'download_steps')
                    @include('components.product-download-tabs', [
                        'tabs' => get_sub_field('tabs'),
                        'toggleTabNames' => get_sub_field('toggle_tab_names'),
                        'includeDownloadTable' => get_sub_field('include_download_table'),
                        'includeSourceCodeSection' => get_sub_field('include_source_code_section'),
                        'sourceCodeSectionTitle' => get_sub_field('source_code_section_title'),
                        'sourceCodeSectionDescription' => get_sub_field('source_code_section_description'),
                        'expandableTitle' => get_sub_field('expandable_title'),
                        'tableTitle' => get_sub_field('table_title'),
                        'tableDescription' => get_sub_field('table_description'),
                        'product' => get_sub_field('product')
                    ])

                @elseif(get_row_layout() == 'cards_grid')
                    <div class="container space-between-sections grid grid-cols-12">
                        @include('partials.header', [
                            'data' => get_sub_field('header'),
                            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-5',
                        ])

                        @include('partials.cards-grid', [
                            'data' => get_sub_field('cards'),
                            'containerClasses' => 'mt-[60px] md:mt-[80px] lg:mt-[120px]',
                        ])
                    </div>

                @elseif(get_row_layout() == 'contact_banner')
                    @include('components.banner', [
                        'title' => get_sub_field('title'),
                        'titleStylesData' => get_sub_field('title_styles'),
                        'headingTag' => get_sub_field('heading_tag'),
                        'description' => get_sub_field('description'),
                        'descriptionStylesData' => get_sub_field('description_styles'),
                        'cta' => get_sub_field('cta'),
                        'attributes' => get_sub_field('attributes'),
                        'background' => get_sub_field('background'),
                        'media' => get_sub_field('media'),
                        'sectionOptions' => get_sub_field('section_options')
                    ])
                @endif
            @endwhile
        @endwhile

@endsection
