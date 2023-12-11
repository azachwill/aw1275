@php
    $cta = isset($data['cta']) ? $data['cta'] : $data;

    $isDiv = isset($linkAsDiv);

    $container = $isDiv ? 'div' : 'a';

    // Values sm, md, lg
    $size = $cta['size'] ?? 'md';
    // Values light, dark
    $style = $cta['theme'] ?? 'light';
    $link = $cta['link']['url'] ?? '#';
    $text = $cta['link']['title'] ?? '';
    $target = $cta['link']['target'] ?? '_self';
    $ariaLabel = $cta['link']['aria_label'] ?? '';
    $class = $cta['class'] ?? $class;
    $orientation =  $orientation ?? 'right';

    $type = $type ?? 'arrow';
    $rel = $target === '_blank' ? 'noopener noreferrer' : '';
@endphp

<{{$container}} class="{{ $class }} link link-{{ $size }}-{{ $style }}" href="{{ $link ?? '#' }}" target="{{ $target }}" rel="{{ $rel }}" aria-label="{{ $ariaLabel }}">
    @if($orientation === 'left')
        @include('partials.icons', [
            'icon' => 'link-arrow-left',
            'class' => 'mr-[4px]'
        ])
    @endif
    {{ $text }}
    @if($orientation === 'right')
        @if($type == 'external')
            @include('partials.icons', [
                'icon' => 'external-link',
                'class' => 'ml-[4px]'
            ])
        @else
            @include('partials.icons', [
                'icon' => 'link-' . $size . '-' . $style
            ])
        @endif
    @endif
</{{ $container }}>