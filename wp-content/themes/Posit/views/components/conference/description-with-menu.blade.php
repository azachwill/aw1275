<section class="description-with-menu scroll-smooth">
    <div class="dwm-content container grid grid-cols-12 py-[80px] lg:gap-x-[28px]">
        <div class="col-span-12 lg:col-span-6{{ $menu['menu_order'] == 'left' ? ' lg:order-2 lg:col-start-6' : '' }}">
            @if ( $hasDate )
            <div class="flex gap-x-[16px] items-center">
                @include('partials.icons', [
                    'icon' => 'calendar'
                ])
                @if ( $startDate )
                <div class="h5-regular text-blue1 uppercase">
                    {{ $startDate }} - {{ $endDate }}
                </div>
                @endif
            </div>
            @endif
            @if ( $hasTime )
                @if ( $startTime || $endTime )
                <div class="mt-[16px] body-lg-semibold uppercase">
                    {{ $startTime }} - {{ $endTime }}
                </div>
                @endif
            @endif
            @if ( $hasSubtitle )
            <div class="subtitle body-lg-semibold text-blue1 my-[20px]">
                {{ $subtitle }}
            </div>
            @endif
            @if ( $hasLocationLink )
            <div class="mt-[16px]">
                @include('partials.links.link', [
                   'data' => $locationLink,
                   'type' => 'external'
                ])
            </div>
            @endif
            @if ( $description )
            <div class="mt-[25px] body-md-regular wysiwyg-content">
                {!! $description !!}
            </div>
            @endif
        </div>
        @if(!empty($menu['items']))
            <div class="dwm-sidebar-menu lg:relative col-span-12 lg:col-span-3 mt-[89px] lg:mt-0{{ $menu['menu_order'] == 'left' ? ' lg:order-1' : ' lg:col-start-9' }}">
                @if ( $menu['toggle_menu_title'] )
                <div class="body-lg-semibold text-blue1">
                    {{ $menu['title'] }}
                </div>
                @endif
                <div class="grid mt-[16px] lg:sticky lg:top-[100px]">
                    @foreach($menu['items'] as $item)
                        <a class="flex justify-between items-center body-sm-regular text-blue1/[.62] hover:text-blue1 hover:bg-gray4/20 focus:text-blue1 focus:shadow-[inset_0_0_0_3px_rgba(50,118,181,0.25)] focus:outline-blue4/25 active:text-blue1 py-[12px] px-[8px] border-b-[1px] border-b-solid border-b-neutral-gray" href={{ $item['link']['url'] }}>
                            {{ $item['link']['title'] }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</section>