<section class="highlights">

    <div class="grid grid-cols-12 space-between-sections">

        @include('components.video-layout', [
            'header' => $videoLayout['header'],
            'hasVideo' => $videoLayout['has_video'],
            'responsiveVideo' => $videoLayout['is_responsive'],
            'video' => $videoLayout['video'],
            'image' => $videoLayout['image'],
            'addFooter' => $videoLayout['add_footer'],
            'footerType' => $videoLayout['footer_type'],
            'quote' => $videoLayout['quote'],
            'text' => $videoLayout['text'],
            'additionalClasses' => 'col-span-full py-0 md:gap-x-[16px] lg:gap-x-[28px]',
            'sectionOptions' => $videoLayout['section_options'],
        ])

        @if(!empty($imagesContent['images']))

            @php
                $dataDesktopViews = $imagesContent['aspect_ratio'] == 'object-cover' ? '4' : '9';
                $dataTabletViews = $imagesContent['aspect_ratio'] == 'object-cover' ? '2' : '3';
            @endphp

            <div class="glide block col-span-full mt-[80px]" data-type="slider" data-desktop-views="{{ $dataDesktopViews }}" data-tablet-views="{{ $dataTabletViews }}"
                 data-peek-before="80" data-tablet-peek-before="60" data-mobile-peek-before="40" data-glide-el="track">

                <!-- Controls -->
                @include('partials.slider-controls', [
                    'additionalClasses' => count($imagesContent['images']) < 4 ? 'md:hidden' : (count($imagesContent['images']) < 5 ? 'lg:hidden': '')
                ])
                
                <!-- Slider -->
                <div class="glide__track overflow-hidden md:mt-[40px]" data-glide-el="track">
                    <div class="glide__track-slider flex {{ $imagesContent['aspect_ratio'] == 'object-cover' ? 'flex' : 'flex' }} md:gap-x-[16px] lg:gap-x-[28px]">
                        @foreach($imagesContent['images'] as $index => $image)
                            @include('components.conference.highlight-card', [
                                'image' => $image,
                                'aspectImage' => $imagesContent['aspect_ratio']
                            ])
                        @endforeach
                    </div>
                </div>

            </div>

        @endif

    </div>

</section><!-- .highlights -->