@if($postTags)
    @php
        $link = '/blog/?post_tag=';
        if (isset($type) && $type == 'video'){
            $link = '/resources/videos/?post_tag=';
        }
    @endphp
    
    <div class="{{ isset($iframe) && !$iframe ? 'mt-[48px]' : '' }}">
        <span class="body-xs-semibold uppercase mr-[12px] mt-[12px]">Tags:</span>
        @foreach($postTags as $tag)
            <a
                class="link-light body-xs-regular uppercase mr-[12px] mt-[12px] inline-block"
                href="{{$link . $tag['slug'] }}"
                aria-label="{{ 'Link to ' . $tag['name'] . ' tag'}} ">
                {{ $tag['name'] }}
            </a>
        @endforeach
    </div>
@endif