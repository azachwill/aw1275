<div class="w-full h-full flex-col md:flex">

    @if ( $data['icon'] )
        @php
            $iconSize = $data['icon_size'] === 'lg' ? 'w-[80px] h-[80px]'
            : ( $data['icon_size'] === 'md' ? 'w-[60px] h-[60px]'
            : 'w-[40px] h-[40px]')
        @endphp
        <img class="{{ $iconSize }} mb-[40px]" src="{{ $data['icon']['url'] }}" alt="{{ $data['icon']['alt'] }}">
    @endif

    <div class="flex h-auto md:h-full">
        <div class="w-full">
            <span class="h5 text-blue1">
                {{ $data['title'] }}
            </span>
            @if ($data['description'])
                <p class="body-lg-regular text-neutral-blue62 mt-[16px]">
                    {{ $data['description'] }}
                </p>
            @endif
        </div>
        @if ( $data['add_link'] && $data['link_options'] == 'card_as_CTA' )
            <div class="flex items-end ml-[16px] shrink-0 translate-x-[10px] md:translate-x-0">
                @include('partials.icons', [
                    'icon' => 'link-arrow',
                    'class' => 'arrow translate-x-[-10px] duration-300'
                ])
            </div>
        @endif
    </div>
</div>

@if ( $isPost )

    <div class="link-container mt-[20px]">
        @include('partials.links.link', [
           'data' => [
                'link' => [
                    'url' => $data['url'],
                    'title' => 'Learn more',
                    'target' => '_self'
                ],
            ],
            'linkAsDiv' => true
        ])
    </div>

@elseif($data['add_link'] && $data['link_options'] == 'add_link')

    <div class="link-container mt-[20px]">
        @include('partials.links.link', [
           'data' => $data['cta_link'],
           'linkAsDiv' => true
        ])
    </div>

@endif

