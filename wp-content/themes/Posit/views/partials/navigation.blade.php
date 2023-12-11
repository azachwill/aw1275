@php
    $navigationButton = get_field('navigation_button', 'options');
    $navigationLinks = get_field('navigation_links', 'options');
@endphp

<!-- desktop nav -->
<nav class="header-nav hidden lg:block fixed w-full z-50">
    <div class="navigation container flex w-full h-[78px] py-[16px] px-[80px] items-center justify-between text-neutral-light/60">
        <div class="absolute w-full h-[1px] left-0 top-[78px] bg-neutral-light/20 z-0"></div>
        <div class="blur-bg absolute w-full h-full top-0 left-0 z-0"></div>
        <div class="navigation-background absolute w-full h-[878px] max-h-[calc(75vh+78px)] top-0 left-0 translate-y-full z-[-1] bg-blue1 z-0"></div>
        <div class="flex h-full z-20 items-center">
            <a href="/" class="flex justify-center items-center focus-visible-link" aria-label="Posit Logo - Go to Homepage">
                <div class="logo">
                    @include('partials.icons', [
                        'icon' => 'nav-logo-color'
                    ])
                </div>
            </a>
            <ul class="items-container flex h-full ml-[16px]">
                @foreach($navigationLinks as $navigationLink)
                    @if($navigationLink['link_type'] == 'parent')
                        <li class="navbar-item grid items-center">
                            <a href="#" class="navbar-tab flex px-[12px] py-[8px] items-center" aria-haspopup="true" aria-expanded="false">
                                @if($navigationLink['name'])
                                <div class="title ui-small text-neutral-dark62 uppercase">
                                    {{$navigationLink['name']}}
                                </div>
                                @endif
                                <div class="arrow ml-[4px]">
                                    @include('partials.icons', [
                                        'icon' => 'nav-arrow-down'
                                    ])
                                </div>
                            </a>
                            <section class="nav-modal invisible opacity-0 fixed w-full h-[800px] max-h-[75vh] grid-cols-12 top-[78px] left-0 overflow-y-auto">
                                @include('partials.modal-navigation')
                            </section>
                        </li>
                    @else
                        @if($navigationLink['single_link']['title'])
                            <li class="flex items-center"> 
                                <a href="{{$navigationLink['single_link']['url']}}" target="{{$navigationLink['single_link']['target']}}" class="flex px-[12px] py-[8px] items-center title ui-small text-neutral-dark62 uppercase">
                                    {{$navigationLink['single_link']['title']}}
                                </a>
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="flex z-20 items-center">
            <button type="button" aria-label="Open search box" class="{{ is_page(2314) ? 'hidden' : '' }} nav-search flex w-[44px] h-[44px] items-center justify-center relative">
                @include('partials.icons', [
                    'icon' => 'nav-search'
                ])
                <div id="rs-search-button"></div>
            </button>
            @if ( !is_singular( 'download' ) )
                @include('partials.cta', [
                    'data' => $navigationButton,
                    'additional_classes' => 'ml-[16px]'
                ])
            @endif
        </div>
    </div>
</nav>

<!-- tablet and mobile nav -->
<nav class="mobile-nav block lg:hidden z-50">
    <div class="mobile-nav-wrapper flex fixed top-0 w-full h-[70px] md:h-[76px] py-[12px] md:py-[15px] px-[20px] md:px-[60px] z-10 items-center justify-between bg-neutral-light/60 ui-small text-neutral-light/60">
        <div class="invisible md:visible absolute left-0 top-[76px] h-[1px] w-full bg-neutral-light/20"></div>
        <div class="blur-bg absolute w-full h-full top-0 left-0"></div>
        <div class="mobile-nav-background translate-y-full bg-blue1 h-screen z-[-1] w-full absolute top-0 left-0"></div>
        <div class="flex z-20 h-full items-center">
            <a href="/" class="flex justify-center items-center" aria-label="Posit Logo - Go to Homepage">
                <div class="logo">
                    @include('partials.icons', [
                        'icon' => 'nav-logo-color'
                    ])
                </div>
            </a>
        </div>
        <div class="flex z-20 items-center">
            <button type="button" aria-label="Open search box" class="nav-search flex w-[44px] h-[44px] items-center justify-center relative">
                @include('partials.icons', [
                    'icon' => 'nav-search'
                ])
                <div id="rs-search-button-mobile"></div>
            </button>
            <a href="#" class="open-mobile-nav flex w-[44px] h-[44px] ml-[8px] items-center justify-center" aria-label="Open mobile navigation">
                @include('partials.icons', [
                    'icon' => 'nav-hamburger'
                ])
            </a>
            <a href="#" class="close-mobile-nav hidden flex w-[44px] h-[44px] ml-[8px] items-center justify-center" aria-label="Close mobile navigation">
                @include('partials.icons', [
                    'icon' => 'nav-close',
                    'stroke' => 'stroke-neutral-light'
                ])
            </a>
        </div>
    </div>
    <!-- tablet and mobile menu-->
    <div class="mobile-menu absolute top-[70px] md:top-[76px] z-20 hidden lg:hidden w-full h-full max-h-[calc(100vh-70px)] md:max-h-[calc(100vh-76px)] ui-medium text-neutral-light/60">
        @foreach($navigationLinks as $navigationLink)
            @if($navigationLink['link_type'] == 'parent')
            <div class="mobile-menu-item">
                <a href="#" class="mobile-tab flex px-[20px] md:px-[60px] py-[14px] md:py-[16px] items-center justify-between uppercase" aria-label="Link to {{$navigationLink['name']}}">
                    @if($navigationLink['name'])
                    <div>
                        {{$navigationLink['name']}}
                    </div>
                    @endif
                    @include('partials.icons', [
                        'icon' => 'nav-arrow-right-opacity'
                    ])
                </a>
                <section class="mobile-nav-modal hidden fixed w-full h-[calc(100%-70px)] md:h-[calc(100%-76px)] grid-cols-12 translate-x-full top-[70px] md:top-[76px] left-0 z-30 bg-blue1">
                    @include('partials.modal-navigation')
                </section>
            </div>
            @else
                @if($navigationLink['single_link']['title'])
                    <div class="mobile-menu-item--no-js">
                        <a href="{{$navigationLink['single_link']['url']}}" target="{{$navigationLink['single_link']['target']}}" class="flex px-[20px] md:px-[60px] py-[14px] md:py-[16px] items-center justify-between uppercase" aria-label="Link to {{$navigationLink['name']}}">
                            {{$navigationLink['single_link']['title']}}
                        </a> 
                    </div>
                @endif
            @endif
        @endforeach
    </div>
</nav>
