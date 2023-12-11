@php

$sectionAttributes                  = $sectionAttributes['attributes'] ?? [];
$sectionId                          = $sectionAttributes['section_id'] ?? null;
$sectionId                          = $sectionId ? 'id=' . $sectionId : null;
$sectionClasses                     = $sectionAttributes['section_classes'] ?? null;

$sectionBackground                  = $sectionBackground['background'] ?? [];
$bgClass                            = ( $sectionBackground['override_color'] && $sectionBackground['color'] != 'custom' ) ? $sectionBackground['color'] : null;
$bgStyle                            = ( $sectionBackground['override_color'] && $sectionBackground['color'] == 'custom' ) ? 'style=background-color:' . $sectionBackground['custom_color'] . ';' : null;

@endphp

<section {{ $sectionId }} class="sticky-subnav p-[16px] md:p-[30px] {{ $sectionClasses }} {{ $bgClass }}" {{ $bgStyle }}>

    <div class="sticky-subnav__wrapper">

        <div class="sticky-subnav__grid md:container flex flex-row flex-nowrap md:flex-wrap md:justify-items-center gap-8 md:gap-8 w-[100%]">

            @if ( $navItems )

                @foreach ( $navItems as $navItem )

                    <div class="sticky-subnav__item">
                        <a href="#{{ $navItem['target'] }}" class="sticky-subnav__item--link js--anchor js--anchor-open-source uppercase sh4 text-blue1 border-b-[1px]" role="button">
                            {{ $navItem['name'] }}
                            @include('partials.icons', [
                                'icon' => 'nav-arrow-down',
                                'class' => 'ml-[4px]'
                            ])
                        </a>
                    </div>

                @endforeach
            
            @endif
    
        </div><!-- .sticky-subnav__grid -->

        <div class="sticky-subnav__arrow">
            @include('partials.icons', [
                'icon' => 'nav-arrow-right',
                'class' => 'ml-[4px]'
            ])
        </div>

    </div><!-- .sticky-subnav__wrapper -->

</section><!-- .section-feature-tabs -->

