@if ( $cardType == 'solid-1' )

    <div class="dynamic-card solid-card repeater-modal-container {{ $cardType }} rounded-[8px] p-[32px] {{ $layoutClasses }}">

        @if( $dynamicCard['image'] )

        @php
            $image          = $dynamicCard['image'];
            $size           = 'full';
            $imageProps     = ['class' => 'card-media__image w-auto h-[100%] object-contain'];
        @endphp

        <div class="card-media overflow-hidden rounded-[8px] h-[120px]">
            {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
        </div>

        @endif

        <div class="card-body flex flex-col">

            <div class="mt-[16]">
                @if( $dynamicCard['tag'] )
                <p class="card-tag sh4 uppercase mb-[8px] text-blue1">
                    {{ $dynamicCard['tag'] }}
                </p>
                @endif
                @if( $dynamicCard['title'] )
                <h3 class="card-title {{ $twoCards ? 'h3 uppercase' : 'h5 line-clamp-3' }}">
                    {{ $dynamicCard['title'] }}
                </h3>
                @endif
                @if( $dynamicCard['subtitle'] )
                <p class="card-subtitle subtitle body-lg-regular text-blue1 my-[20px]">
                    {{ $dynamicCard['subtitle'] }}
                </p>
                @endif
                @if( $dynamicCard['description'] )
                <p class="card-description description {{ $dynamicCard['subtitle'] || $dynamicCard['title'] ? 'mt-[16px]' : 'mt-[0]' }} body-md-regular text-neutral-blue62">
                    {!! $dynamicCard['description'] !!}
                </p>
                @endif
            </div>

        </div><!-- .card-body -->

        @if ( $dynamicCard['has_cta'] )

            @if ( $dynamicCard['cta_type'] == 'button' )

                <div class="card-footer flex flex-col md:flex-row mt-[40px]">
                    @foreach( $dynamicCard['buttons'] as $index => $cta )
                        @include('partials.cta', [
                            'data' => $cta,
                            'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                        ])
                    @endforeach
                </div><!-- .card-footer -->

            @else

                <div class="card-footer flex flex-col gap-4 justify-self-end mt-[40px]">

                    @foreach( $dynamicCard['links'] as $index => $cta )
                        @php
                            $toggleModal            = $cta['modal']['toggle_cta_modal'];
                            $modalTitle             = $cta['modal']['modal_title'];
                            $modalDesc              = $cta['modal']['modal_description'];
                            $modalVideoEmbed        = $cta['modal']['modal_video_embed'];
                        @endphp
                        @if ( $toggleModal )
                            <div class="repeater-modal-box mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0">
                                @include('partials.links.link-cta', [
                                    'data' => $cta,
                                    'class' => 'repeater-modal-trigger cta-modal-trigger'
                                ])
                                <div>
                                    @include('components.modal-cta', [
                                        'modalContent' => 'video-embed', 
                                        'theme' => 'light',
                                        'modalTitle' => $modalTitle,
                                        'modalDesc' => $modalDesc,
                                        'modalVideoEmbed' => $modalVideoEmbed,
                                        'isRepeaterModal' => true,
                                    ])
                                </div>
                            </div>
                        @else
                            @include('partials.links.link', [
                                'data' => $cta,
                                'class' => 'card-footer__link mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                            ])
                        @endif
                    @endforeach

                </div>

            @endif

        @endif

    </div>

@else

    <div class="dynamic-card standard-card repeater-modal-container rounded-[8px] {{ $layoutClasses }}">

        @if ( $dynamicCard['image'] )
        
        @php
            $image          = $dynamicCard['image'];
            $size           = 'full';
            $imageProps     = ['class' => 'w-[100%] h-[100%] object-cover'];
        @endphp

        <div class="card-image overflow-hidden rounded-[8px]">
            {!! wp_get_attachment_image( $image, $size, '', $imageProps ) !!}
        </div>

        @endif

        <div class="card-body flex flex-col">

            <div class="mt-[16px]">
                @if ( $dynamicCard['tag'] )
                <p class="post-card__tag sh4 uppercase mb-[8px] text-blue1">
                    {{ $dynamicCard['tag'] }}
                </p>
                @endif
                @if ( $dynamicCard['title'] )
                <h3 class="post-card__title  {{ $twoCards ? 'h3 uppercase' : 'h5 line-clamp-3' }}">
                    {{ $dynamicCard['title'] }}
                </h3>
                @endif
                @if ( $dynamicCard['subtitle'] )
                <p class="post-card__subtitle subtitle body-lg-regular text-blue1 my-[20px]">
                    {{ $dynamicCard['subtitle'] }}
                </p>
                @endif
                @if ( $dynamicCard['description'] )
                <p class="post-card__description mt-[16px] body-md-regular text-neutral-blue62">
                    {!! $dynamicCard['description'] !!}
                </p>
                @endif
            </div>

        </div><!-- .card-body -->

        @if ( $dynamicCard['has_cta'] )

            @if ( $dynamicCard['cta_type'] == 'button' )

                <div class="card-footer flex flex-col md:flex-row mt-[40px]">

                    @foreach( $dynamicCard['buttons'] as $index => $cta )

                        @php
                            $toggleModal            = $cta['cta']['toggle_cta_modal'];
                            $modalTitle             = $cta['cta']['modal_title'];
                            $modalDesc              = $cta['cta']['modal_description'];
                            $modalVideoEmbed        = $cta['cta']['modal_video_embed'];
                        @endphp

                        @if ( $toggleModal )
                            <div class="repeater-modal-box">
                                @include('partials.cta', [
                                    'data' => $cta,
                                    'additional_classes' => 'repeater-modal-trigger cta-modal-trigger mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                                ])
                                <div>
                                    @include('components.modal-cta', [
                                        'modalContent' => 'video-embed', 
                                        'theme' => 'light',
                                        'modalTitle' => $modalTitle,
                                        'modalDesc' => $modalDesc,
                                        'modalVideoEmbed' => $modalVideoEmbed,
                                        'isRepeaterModal' => true,
                                    ])
                                </div>
                            </div>
                        @else
                            @include('partials.cta', [
                                'data' => $cta,
                                'additional_classes' => 'mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                            ])
                        @endif

                    @endforeach

                </div><!-- .card-footer -->

            @else

            <div class="card-footer flex flex-col gap-4 justify-self-end mt-[40px]">

                @foreach( $dynamicCard['links'] as $index => $cta )

                    @php
                        $toggleModal            = $cta['modal']['toggle_cta_modal'];
                        $modalTitle             = $cta['modal']['modal_title'];
                        $modalDesc              = $cta['modal']['modal_description'];
                        $modalVideoEmbed        = $cta['modal']['modal_video_embed'];
                    @endphp

                    @if ( $toggleModal )
                        <div class="repeater-modal-box mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0">
                            @include('partials.links.link-cta', [
                                'data' => $cta,
                                'class' => 'repeater-modal-trigger cta-modal-trigger'
                            ])
                            <div>
                                @include('components.modal-cta', [
                                    'modalContent' => 'video-embed', 
                                    'theme' => 'light',
                                    'modalTitle' => $modalTitle,
                                    'modalDesc' => $modalDesc,
                                    'modalVideoEmbed' => $modalVideoEmbed,
                                    'isRepeaterModal' => true,
                                ])
                            </div>
                        </div>
                    @else
                        @include('partials.links.link', [
                            'data' => $cta,
                            'class' => 'card-footer__link mb-[16px] last-of-type:mb-0 md:mb-0 md:mr-[16px] md:last-of-type:mr-0'
                        ])
                    @endif

                @endforeach

            </div>

            @endif

        @endif

    </div><!-- .dynamic-card -->

@endif



