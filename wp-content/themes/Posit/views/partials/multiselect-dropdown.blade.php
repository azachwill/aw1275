<div class="multiselect-dropdown cursor-pointer relative block border border-gray3 rounded overflow-hidden">
    <button class="select-option flex w-full px-[24px] py-[18px] justify-between items-center">
        <span class="select-option-title body-md-regular text-blue1/[.62]">
            Filter By
        </span>
        <div class="flex items-center gap-x-[16px]">
            <div class="checkbox-count hidden px-[9px] border border-blue3/10 rounded-sm bg-blue3/20 body-md-regular"></div>
            <div class="dropdown-arrow">
                @include('partials.icons', ['icon' => 'nav-arrow-down'])
            </div>
        </div>
    </button>
    <div class="options hidden w-full max-h-0 opacity-0">
        <div class="select-option lg:hidden px-[20px] md:px-[60px] py-[16px] md:py-[24px]">
            <div class="flex px-[8px] py-[7.5px] justify-between items-center">
                <span class="select-option-title body-md-regular text-blue1/[.62]">
                    Filter By
                </span>
                <button class="btn-close-modal btn btn-md-icon !shadow-none ml-[16px]" aria-label="Close filters modal">
                    @include('partials.icons', [
                        'icon' => 'nav-close'
                    ])
                </button>
            </div>
        </div>
        <div class="options-wrapper opacity-0 px-[20px] md:px-[60px] lg:px-[24px] pb-[10px] lg:pb-0 overflow-y-auto">
            @if(isset($dropdownOptions))
                @foreach($dropdownOptions as $index => $dropdownOption)
                    @include('partials.checkbox', [
                        'index' => $index,
                        'title' => $dropdownOption['title']
                    ])
                @endforeach
            @endif
        </div>
        <div class="grid px-[20px] md:px-[60px] lg:px-[20px] py-[16px] md:py-[32px] lg:py-[16px] bg-neutral-light border-t-[0.5px] border-gray4">
            @include('partials.cta', [
                'data' => [
                    'link' => [
                        'url' => '#',
                        'title' => 'Clean Search',
                        'target' => '_self'
                    ],
                    'button_type' => 'secondary',
                    'button_size' => 'md',
                ],
                'additional_classes' => 'clean-search'
            ])
        </div>
    </div>
</div>
