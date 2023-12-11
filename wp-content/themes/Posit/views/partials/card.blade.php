@php
    $isLink = $data['add_link'];
    $isPost = isset($data['post_link']) ?? false;
    $link = $data['url'] ?? ($data['cta_link']['link']['url'] ?? '');
    $target = !!$data['link']['target'] ? $data['link']['target'] :'_self';

    if($isLink && $isPost){
        $ariaLabelType =  'learn more';
    } elseif($data['add_link'] && $data['link_options'] == 'add_link'){
        $ariaLabelType = $data['cta_link']['link']['title'];
    } else {
        $ariaLabelType = 'link';
    }
@endphp

@if ( $isLink )
    <a tabindex="0" target={{$target}} aria-label="{{$data['title']}} {{$ariaLabelType}}" class="relative link-card {{ $containerClasses ?? '' }}" href="{{ $link }}">
        @include('partials.card.template',[
            'data' => $data,
        ])
    </a>
@else
    <div class="card relative {{ $containerClasses ?? '' }}">
        @include('partials.card.template',[
            'data' => $data,
        ])
    </div>
@endif
