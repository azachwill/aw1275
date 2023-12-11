<div>
    <div class="flex justify-center items-center bg-gray4/[0.2] rounded-lg shadow-img-shadow-inset w-full max-w-[262px] h-[92px] md:h-[105px] lg:h-[150px] p-[20px]">
        <img class="h-full w-full object-contain" src="{{ $partner['image'] }}" alt="{{ $partner['imageAlt'] }}">
    </div>
    <p class="flex items-center mt-4 md:min-h-[52px] lg:min-h-fit body-sm-semibold text-blue1">
        {{ $partner['customData']['location'] }}
    </p>
    <div class="flex items-center justify-between mt-4">
        <h3 class="h4-regular text-blue1">
            {{ $partner['title'] }}
        </h3>
        <a href="{{ $partner['customData']['company_site'] }}" class="cursor-pointer" target="_blank" aria-label="Link to: {{ $partner['customData']['company_site'] }}">
            @include('partials.icons', ['icon' => 'open-other-tab', 'stroke' => 'stroke-blue1'])
        </a>
    </div>
    <p class="mt-2 body-md-regular line-clamp-3 text-blue1/[.62]">
        {{ $partner['customData']['description'] }}
    </p>
    <div class="mt-4"
         data-name="{{ $partner['title'] }}"
         data-location="{{ $partner['customData']['location'] }}"
         data-description="{{ $partner['customData']['description'] }}"
    >
        @include('partials.links.link', [
            'data' => [
                'link' => [
                    'title' => 'Read more'
                ],
                'class' => 'partner-modal-trigger'
            ]
        ])
    </div>
</div>
