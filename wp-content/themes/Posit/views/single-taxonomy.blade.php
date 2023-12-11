@php
    
    $taxonomy = get_queried_object();
    $flexibleContent = get_field('flexible_content', $taxonomy);
    
    $productArgs = getTaxonomyArg('segments', [get_queried_object()->slug]);
    $entries = productSegmentTaxonomyRequest($productArgs, 'product');
    
@endphp

@extends('master')

@section('content')
    <div>
        @if($flexibleContent)
            @foreach($flexibleContent as $flexible)
                @if($flexible["acf_fc_layout"] == 'hero')
                    @include('components.hero', [
                        'header' => $flexible['hero']['header'],
                        'heroImage' => $flexible['hero']['image'],
                        'imagePosition' => $flexible['hero']['image_position'],
                        'addLottie' => $flexible['hero']['add_lottie'],
                        'lottieFile' => $flexible['hero']['lottie_file'],
                        'lottieOptions' => $flexible['hero']['lottie_options']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'text_with_illustration')
                    @include('components.text-with-illustration', [
                        'title' => $flexible['text_with_illustration']['title'],
                        'headingTag' => $flexible['text_with_illustration']['heading_tag'],
                        'description' => $flexible['text_with_illustration']['description'],
                        'image' => $flexible['text_with_illustration']['image'],
                        'imagePosition' => $flexible['text_with_illustration']['image_position'],
                        'cta' => $flexible['text_with_illustration']['cta'],
                        'textPosition' => $flexible['text_with_illustration']['text_position']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'category_products')
                    @include('components.category-products', [
                        'header' => $flexible['category_products']['header'],
                        'products' => $flexible['category_products']['products']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'vertical_cards')
                    @include('components.cards-layout', [
                        'header' => $flexible['vertical_cards']['header'],
                        'cards' => $flexible['vertical_cards']['cards']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'data')
                    @include('components.data', [
                        'header' => $flexible['data']['header'],
                        'cards' => $flexible['data']['card']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'customer_stories')
                    @include('components.header-with-cpt', [
                        'header' => $flexible['customer_stories']['header'],
                        'posts' => $flexible['customer_stories']['posts']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'partner_companies')
                    @include('components.partner-companies', [
                        'header' => $flexible['partner_companies']['header'],
                        'companies' => $flexible['partner_companies']['companies']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'sliding_cards')
                    @include('components.sliding-cards', [
                        'title' => $flexible['sliding_cards']['sliding_title'],
                        'content' => $flexible['sliding_cards']['content'],
                        'contentCards' => $flexible['sliding_cards']['cards'],
                        'posts' => $flexible['sliding_cards']['posts']
                    ])
                @endif

                @if($flexible["acf_fc_layout"] == 'contact_banner')
                    @include('components.banner', [
                        'title' => $flexible['contact_banner']['title'],
                        'titleStylesData' => $flexible['contact_banner']['title_styles'],
                        'headingTag' => $flexible['contact_banner']['heading_tag'],
                        'description' => $flexible['contact_banner']['description'],
                        'descriptionStylesData' => $flexible['contact_banner']['description_styles'],
                        'cta' => $flexible['contact_banner']['cta'],
                        'attributes' => $flexible['contact_banner']['attributes'],
                        'background' => $flexible['contact_banner']['background'],
                        'media' => $flexible['contact_banner']['media'],
                        'sectionOption' => $flexible['contact_banner']['section_options']
                    ])
                @endif

            @endforeach
        @endif

    </div>

@endsection
