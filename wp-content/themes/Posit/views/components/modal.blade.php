@php
    $themeProps = [
        'dark' => [
            'bgColor' => 'bg-blue1',
            'textColor' => 'text-neutral-light',
            'icon-stroke' => 'stroke-blue5'
        ],
        'light' => [
            'bgColor' => 'bg-gray6',
            'textColor' => 'text-blue1',
            'icon-stroke' => 'stroke-gray2'
        ],

    ];

    $theme = $theme ?? 'dark';
@endphp
<div class="{{$modalContent == 'partner-form' ? 'partner-form-modal' : 'sm-modal md:px-[60px]' }} grid hidden fixed w-screen lg:w-full lg:max-w-[1440px] !top-0 !h-screen left-0 right-0 top-0 md:top-[76px] lg:top-[78px] lg:mx-auto lg:px-[80px] blur-bg !z-50 justify-center">
    <div class="grid grid-cols-12 {{$modalContent == 'partner-form' ? 'flex w-screen lg:w-full col-span-full lg:py-[82px]' : '' }} w-full h-full lg:gap-x-[28px] z-20 overflow-y-hidden items-center justify-center">
        <div tabindex="0" class="modal-wrapper col-span-full h-full pb-[40px] {{$modalContent == 'partner-form' ? 'w-full lg:col-span-8 lg:col-start-3 lg:rounded-lg' : 'lg:mx-[59px] lg:col-span-9 lg:col-start-5 md:h-fit md:max-h-[400px] md:rounded-lg' }} overflow-y-auto shadow-modal {{ $themeProps[$theme]['bgColor'] }}">
            <div class="grid sticky top-0 p-[8px] blur-bg z-20 justify-end">
                <button class="close-modal p-[16px]">
                    @include('partials.icons', [
                        'icon' => 'nav-close',
                        'stroke' => $themeProps[$theme]['icon-stroke']
                    ])
                </button>
            </div>
            <div class="grid {{$modalContent == 'partner-form' ? 'grid-cols-12 col-span-full' : 'md:flex' }} px-[26px] md:px-[40px] pt-[16px] md:pt-[8px] md:gap-x-[32px] {{ $themeProps[$theme]['textColor'] }}">
                @include('partials.modals.'.$modalContent)
            </div>
        </div>
    </div>
</div>