@php
    $post = isset($data['post']) ? $data['post'] : $data;
    $reversedOrder = false;
    if (isset($reversed)) $reversedOrder = true;
@endphp

<div class="flex flex-col flex-wrap justify-between {{$reversedOrder ? 'text-end' : ''}}">
    <div class="flex flex-col">
        <img class="w-[100%]" src="{{ $post['image'] }}"
             alt="{{ $post['title'] }}">
        <h3 class="h5-regular mt-[16px]">
            {{ $post['title'] }}
        </h3>
        <p class="body-md-regular mt-[8px] text-blue1/[.62]">
            {{$post['excerpt']}}
        </p>
    </div>
    <div class="mt-[16px] flex flex-col md:flex-row {{$reversedOrder ? 'justify-end' : ''}}">
        <a
                href="{{ $post['url'] }}"
                role="button"
                target="_blank"
                class="btn btn-sm-secondary uppercase">
            {{ $ctaText ?? 'Learn More' }}
        </a>
    </div>
</div>