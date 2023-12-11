<div class="w-fit">
    <div class="relative overflow-hidden w-fit">
        <div class="rounded-[8px]">
            <div
                class="absolute bg-neutral-light/[.60] rounded-[4px] w-[80px] h-[80px] z-10 flex justify-center items-center right-0">
                @include('partials.icons', [
                    'icon' => 'play',
                    'class' => 'w-[26px] h-[24px]'
                ])
            </div>
            <img class="aspect-square object-cover hover:scale-110 hover:transition hover:ease-in-out hover:duration-300"  src="{{ $data['image'] }}" alt="{{ $data['imageAlt'] }}" />
        </div>
    </div>
    <div class="flex mt-[16px]">
        <div class="w-full">
            <h5 class="h5 line-clamp-2">{{ $data['customData']['primary_speaker']->post_title }}</h5>
            <p class="body-md-regular text-blue1/[.62] mt-[8px] md:mt-[16px] lg:mt-[8px] line-clamp-4">
                {{ $data['excerpt'] }}
            </p>
            <span class="body-md-semibold text-blue1/[.62] mt-[8px]">
                Date {{ date('m/d/y') }}
            </span>
            <div class="mt-[16px]">
                 @include('partials.links.link', [
                    'data' => [
                        'link' => [
                            'url' => $data['url'],
                            'title' => 'Learn More',
                            'target' => '_self'
                        ],
                    ]
                 ])
            </div>
        </div>
    </div>
</div>