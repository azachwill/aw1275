@php
    //@TODO update members with API
    $members = getLatestPosts('speakers', 10);

    $dropdownOptions = array();
    array_push($dropdownOptions, ['title' => 'Engineering']);
    array_push($dropdownOptions, ['title' => 'Corporate']);
    array_push($dropdownOptions, ['title' => 'Finance']);
@endphp

<section class="our-team">
    <div class="grid grid-cols-12 container pt-[16px] lg:pt-[80px] pb-[80px] md:gap-x-[16px] lg:gap-x-[28px]">
        <div class="sticky col-span-full lg:col-span-4 top-[70px] md:top-[75px] lg:top-0 lg:mr-[61px] pt-[16px] pb-[16px] lg:py-[0] bg-neutral-light">
            <div class="lg:sticky lg:top-[90px]">
                @include('partials.multiselect-dropdown', [
                    'dropdownOptions' => $dropdownOptions
                ])
            </div>
        </div>
        <div class="col-span-full md:col-start-3 lg:col-span-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-[32px] md:mt-[40px] lg:mt-0 gap-y-[32px] gap-x-[8px] md:gap-x-[16px] lg:gap-x-[28px]">
            <div class="col-span-full">
                <div class="filters-title h3 text-blue4">
                    View All
                </div>
                <div class="members body-lg-regular text-blue1/[.62]">
                    235 members
                </div>
            </div>
            @foreach($members as $member)
                <a href="" class="card-member grid col-span-1 text-start"
                   data-image="{{ $member['image'] }}"
                   data-title="{{ $member['title'] }}"
                   data-role="{{ $member['customData']['role'] }}"
                   data-description="{{ $member['excerpt'] }}"
                   data-social-links="{{ json_encode($member['customData']['social_media_links']) }}">
                    <img class="w-full h-[163px] md:h-[186px] lg:h-[190px] object-cover rounded-lg"
                         src="{{ $member['image'] }}"
                         alt="{{ $member['alt'] }}">
                    <div class="mt-[16px] body-md-semibold text-blue1">{{ $member['title'] }}</div>
                    <div class="body-sm-regular text-blue1">{{ json_encode($member['customData']['role']) }}</div>
                </a>
            @endforeach
            <div class="grid col-span-full mt-[8px] md:mt-[28px] justify-center">
                @include('partials.cta', [
                    'data' => [
                        'link' => [
                            'url' => '#',
                            'title' => 'load more',
                            'target' => '_self'
                        ],
                        'button_type' => 'secondary',
                        'button_size' => 'md',
                    ],
                    'additional_classes' => 'w-full md:w-fit'
                ])
            </div>
        </div>
        @include('components.modal', ['modalContent' => 'our-team'])
    </div>
</section>