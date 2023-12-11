@extends('master')

@section('content')
    @while( have_posts() )
        @php
            the_post();
        @endphp
        @while (have_rows('flexible_content'))
            @php the_row(); @endphp

            @if(get_row_layout() == 'hero')
                @include('components.hero', [
                'header' => get_sub_field('header'),
                'heroImage' => get_sub_field('image'),
                'video' => get_sub_field('video'),
                'imagePosition' => get_sub_field('image_position'),
                'showLogo' => get_sub_field('show_logo_svg'),
                'addLottie' => get_sub_field('add_lottie'),
                'lottieFile' => get_sub_field('lottie_file'),
                'lottieOptions' => get_sub_field('lottie_options')
            ])

            @elseif(get_row_layout() == 'text_with_illustration')
                @include('components.text-with-illustration', [
                'title' => get_sub_field('title'),
                'headingTag' => get_sub_field('heading_tag'),
                'description' => get_sub_field('description'),
                'image' => get_sub_field('image'),
                'imagePosition' => get_sub_field('image_position'),
                'cta' => get_sub_field('cta'),
                'textPosition' => get_sub_field('text_position')
            ])

            @elseif(get_row_layout() == 'banner')
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

            @elseif(get_row_layout() == 'customer_stories_posts')
                @include('components.header-with-cpt', [
                'header' => get_sub_field('header'),
                'togglePosts' => get_sub_field('front_end_posts'),
                'posts' => get_sub_field('posts'),
                'layoutClass' => 'section-customer-stories-posts ',
                'postBlockTitle' => get_sub_field('post_block_title'),
                'postBlockDesc' => get_sub_field('post_block_description'),
                'sectionOptions' => get_sub_field('section_options'),
            ])

            @elseif(get_row_layout() == 'industries')
                @include('components.industries', [
                'header' => get_sub_field('header'),
                'image' => get_sub_field('image'),
                'cards' => get_sub_field('cards')
            ])

            @elseif(get_row_layout() == 'data')
                @include('components.data', [
                'header' => get_sub_field('header'),
                'cta' => get_sub_field('cta'),
                'cards' => get_sub_field('card'),
             ])

            @elseif(get_row_layout() == 'learning_and_support')
                @include('components.learning-and-support', [
                'header' => get_sub_field('header'),
                'cards' => get_sub_field('card'),
            ])

            @elseif(get_row_layout() === 'hover_cards')
                @include('components.hover-cards', [
                    'header' => get_sub_field('header'),
                    'cards' => get_sub_field('card'),
                ])

            {{-- Now Customer Logos --}}
            @elseif(get_row_layout() == 'partner_companies')
                @include('components.partner-companies', [
                'header' => get_sub_field('header'),
                'companies' => get_sub_field('companies'),
            ])

            @elseif(get_row_layout() === 'our_people')
                @include('components.our-people', [
                    'header' => get_sub_field('header'),
                    'textBlocks' => get_sub_field('text_blocks'),
                ])

            @elseif(get_row_layout() === 'sliding_cards')
                @include('components.sliding-cards', [
                    'title' => get_sub_field('sliding_title'),
                    'content' => get_sub_field('content'),
                    'contentCards' => get_sub_field('cards'),
                    'posts' => get_sub_field('posts')
                ])

            @elseif(get_row_layout() === 'join_us')
                @include('components.join-us', [
                    'header' => get_sub_field('header'),
                    'collage' => get_sub_field('collage')
                ])

            @elseif(get_row_layout() === 'accordion')
                @include('components.accordion', [
                    'header' => get_sub_field('header'),
                    'questions' => get_sub_field('questions')
                ])

            @elseif(get_row_layout() === 'cards_layout')
                @include('components.cards-layout', [
                    'header' => get_sub_field('header'),
                    'cards' => get_sub_field('cards')
                ])

            @elseif(get_row_layout() === 'cards_grid_layout')
                @include('components.cards-grid-layout', [
                    'header' => get_sub_field('header'),
                    'cardsGrid' => get_sub_field('cards_grid'),
                ])

            @elseif(get_row_layout() === 'cards_grid_card_with_button_layout')
                @include('components.cards-grid-with-card-button-layout', [
                    'header' => get_sub_field('header'),
                    'cards' => get_sub_field('cards'),
                    'cardWithButton' => get_sub_field('card_with_button')
                ])

            @elseif(get_row_layout() === 'products_by_category')
                @include('components.products-by-category', [
                    'header' => get_sub_field('header'),
                    'segments' => get_sub_field('segments')
                ])

            @elseif(get_row_layout() === 'video_layout')
                @include('components.video-layout', [
                    'header' => get_sub_field('header'),
                    'hasVideo' => get_sub_field('has_video'),
                    'responsiveVideo' => get_sub_field('is_responsive'),
                    'video' => get_sub_field('video'),
                    'image' => get_sub_field('image'),
                    'addFooter' => get_sub_field('add_footer'),
                    'footerType' => get_sub_field('footer_type'),
                    'quote' => get_sub_field('quote'),
                    'text' => get_sub_field('text'),

                ])

            @elseif(get_row_layout() === 'data_science_hangout')
                @include('components.data-science-hangout', [
                    'header' => get_sub_field('header'),
                ])

            @elseif(get_row_layout() === 'header_with_cpt_column')
                @include('components.header-with-cpt-column', [
                    'header' => get_sub_field('header'),
                    'posts' => get_sub_field('posts')
                ])

            @elseif(get_row_layout() === 'scheduled_calls')
                @include('components.hangouts.scheduled-calls', [
                    'header' => get_sub_field('header'),
                    'cards' => get_sub_field('cards'),
                ])

            @elseif(get_row_layout() === 'cards_with_tag_grid')
                @include('components.cards-with-tag-grid', [
                    'addHeader' => get_sub_field('add_header'),
                    'header' => get_sub_field('header'),
                    'posts' => get_sub_field('select_posts')
                ])

            @elseif(get_row_layout() === 'past_hangouts')
                @include('components.hangouts.past-hangouts', [
                    'header' => get_sub_field('header'),
                    'sectionOptions' => get_sub_field('section_options')
                ])

            @elseif(get_row_layout() === 'stack_animated_carousel')
                @include('components.stacked-carousel-section', [
                    'conditions' => get_sub_field('conditions'),
                    'header' => get_sub_field('header'),
                    'slides' => get_sub_field('cards'),
                    'alignment' => get_sub_field('carousel_position'),
                    'type'=> 'solid'
                ])

            @elseif(get_row_layout() === 'blurred_carousel')
                @include('components.stacked-carousel-section', [
                    'slides' => get_sub_field('slides'),
                    'type'=> 'blurred'
                ])

            @elseif(get_row_layout() === 'contact_form')
                @include('components.contact_form', [
                    'header' => get_sub_field('header'),
                    'form' => get_sub_field('form'),
                ])

            @elseif(get_row_layout() === 'subscribe_banner')
                @include('components.subscribe-banner', [
                    'title' => get_sub_field('title'),
                    'shortcode'=> 'shortcode'
                ])

            @elseif(get_row_layout() === 'cards_without_background')
                @include('components.cards-without-background', [
                    'header' => get_sub_field('header'),
                    'cards'=> get_sub_field('cards')
                ])

            @elseif(get_row_layout() === 'download_tabs')
                @include('components.download-tabs', [
                    'tabs' => get_sub_field('tabs'),
                ])


            @elseif(get_row_layout() === 'timeline')
                @include('components.timeline', [
                    'header' => [
                        'title_heading'=> get_sub_field('title_heading'),
                        'description' => get_sub_field('description'),
                        'description_size' => get_sub_field('description_size'),
                        'description_style' => get_sub_field('description_style'),
                        'image' => get_sub_field('image'),
                        'imagePosition' => get_sub_field('image_position'),
                        'cta' => get_sub_field('cta'),
                        'textPosition' => get_sub_field('text_position'),
                        ],
                    'events' => get_sub_field('events'),
                ])

            @elseif(get_row_layout() === 'cards_tabs')
                @include('components.cards-tabs', [
                    'tabs' => get_sub_field('tabs'),
                    'ctaLink' => get_sub_field('cta_link'),
                ])

            @elseif(get_row_layout() === 'table_of_content')
                @php
                    $contents = get_sub_field('content_table');
                @endphp

                @include('components.table-of-content', [
                    'contentTable' => get_content_table_fromACF($contents),
                    'content' => view('partials.table-of-content.content-sections',['contents'=>$contents])
                ])

            @elseif(get_row_layout() === 'vertical_paragraphs')
                @include('components.vertical-paragraphs', [
                    'header' => get_sub_field('header'),
                    'paragraphs' => get_sub_field('paragraphs')
                ])

            @elseif(get_row_layout() === 'products_tour')
                @include('components.products-tour', [
                    'header' => get_sub_field('header'),
                    'categories' => get_sub_field('categories'),
                    'selectedProducts' => get_sub_field('selected_products'),
                    'selectProducts' => get_sub_field('select_products'),
                ])

            @elseif(get_row_layout() === 'our_partners')
                @include('components.our-partners', [
                    'header' => get_sub_field('header'),
                    'partners' => get_sub_field('partners')
                ])

                @elseif(get_row_layout() == 'training_banner')
                    @include('components.banner', [
                        'title' => get_sub_field('title'),
                        'headingTag' => get_sub_field('heading_tag'),
                        'description' => get_sub_field('description'),
                        'cta' => get_sub_field('cta'),
                        'bgColor' => 'bg-blue2',
                        'attributes' => get_sub_field('attributes'),
                        'background' => get_sub_field('background')
                    ])

                @elseif(get_row_layout() == 'careers')
                    @include('components.careers', [
                        'header' => get_sub_field('header'),
                        'greenhouseTag' => get_sub_field('greenhouse_html_tag'),
                    ])

                @elseif(get_row_layout() === 'schedule_call')
                    @include('components.schedule-call', [
                        'header' => get_sub_field('header'),
                        'chilliPiperUrl' => get_sub_field('chilli_piper_url')
                    ])

                @elseif(get_row_layout() === 'table_layout')
                    @include('components.table-layout', [
                         'header' => get_sub_field('header'),
                         'tableContents' => get_sub_field('table_contents')
                     ])
                
                @elseif(get_row_layout() === 'countries_list')
                    @include('components.countries', [
                        'hero' => get_sub_field('hero'),
                        'countries' => get_sub_field('countries'),
                        'cta' => get_sub_field('cta')
                    ])

                @elseif(get_row_layout() == 'article')
                    @include('components.article', [
                        'tag' => get_sub_field('tag'),
                        'title' => get_sub_field('title'),
                        'video' => get_sub_field('video'),
                        'image' => get_sub_field('image'),
                        'description' => get_sub_field('description'),
                        'mediaChoice' => get_sub_field('media_choice')
                    ])
            @endif

        @endwhile
    @endwhile
    
@endsection
