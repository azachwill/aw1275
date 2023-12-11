@extends('master')

@section('content')
    <div>
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

                    @include('partials.pricing-tabs')

                @elseif(get_row_layout() == 'calculator')
                    @include('components.pricing.price-calculator', [
                        'description' => get_sub_field('description'),
                        'cta' => get_sub_field('cta')
                    ])

                @elseif(get_row_layout() == 'recommended_product')
                    @include('components.pricing.recommended-product', [
                        'header' => get_sub_field('header'),
                        'product' => get_sub_field('product'),
                        'benefits' => get_sub_field('product_benefits'),
                        'contact' => get_sub_field('contact_cta'),
                    ])

                @elseif(get_row_layout() == 'qualify_steps')
                    @include('components.pricing.qualify-steps', [
                        'header' => get_sub_field('header'),
                        'text' => get_sub_field('text'),
                    ])

                @elseif(get_row_layout() == 'pricing_cards')
                    @include('components.pricing.pricing-cards', [
                        'pricingCards' => get_sub_field('pricing_cards'),
                    ])

                @elseif(get_row_layout() == 'comparison_cards')
                    @include('components.pricing.comparison-cards', [
                        'header' => get_sub_field('header'),
                        'cards' => get_sub_field('cards'),
                    ])

                @elseif(get_row_layout() === 'accordion')
                    @include('components.accordion', [
                        'title' => get_sub_field('title'),
                        'questions' => get_sub_field('questions')
                    ])

                @elseif(get_row_layout() === 'product_details_pricing')
                    @include('components.pricing.product-details', [
                        'header' => get_sub_field('header'),
                        'pricingCards' => get_sub_field('pricing_cards'),
                        'pricingNotes' => get_sub_field('pricing_notes'),
                    ])

                @elseif(get_row_layout() === 'cards_grid')
                    @include('components.cards-grid-layout', [
                        'addHeader' => get_sub_field('add_header'),
                        'header' => get_sub_field('header'),
                        'cardsGrid' => get_sub_field('card_grid')
                    ])

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
    </div>

@endsection
