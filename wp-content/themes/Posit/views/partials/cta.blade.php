@if(isset($data) && is_array($data))
    @php
        $data = $data ?? [];
        $button = key_exists('cta', $data) ? $data['cta'] : $data;

        $additional_props = $props ?? [];
        $cta = is_array($button) && key_exists('link', $button) ? $button['link'] : $button;
    @endphp

    @if(is_array($cta) && isset($cta['title']) && isset($cta['url']))
        @php
            $rel = isset($cta['target']) && $cta['target'] === '_blank' ? 'noopener noreferrer' : '';

            // Shortcode
            $shortcodeData = $button['shortcode'];
            $hasShortcode = $shortcodeData['toggle_shortcode'];
            $shortcode = $shortcodeData['code'];

            $ctaUrl = $hasShortcode ? $shortcode : $cta['url'];
        @endphp
        <a
            {{join( '', $additional_props)}}
            href="{!! do_shortcode( $ctaUrl ) !!}"
            role="button"
            target="{{ $cta['target'] }}"
            rel="{{ $rel }}"
            class="btn btn-{{$button['button_size']}}-{{$button['button_type']}} {{ $additional_classes ?? '' }}"
            aria-label="{{$cta['title']}}">
            @if(isset($icon))
                <img class="{{ $icon_classes ?? '' }}" src="{{ $icon['url'] ?? ''}}" alt="{{ $icon['alt'] ?? ''}}"/>
            @else
                {{ $cta['title'] ?? '' }}
            @endif
        </a>
    @endif
@endif
