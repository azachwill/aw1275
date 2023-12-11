<div class="share-modal grid hidden fixed w-screen h-screen md:h-[calc(100vh-76px)] lg:h-[calc(100vh-78px)] left-0 right-0 top-0 md:top-[76px] lg:top-[78px] blur-bg z-30 justify-center">
    <div class="grid z-40 items-center justify-center">
        <div class="share-modal-wrapper relative w-screen h-full md:w-fit md:h-fit px-[24px] pt-[100px] md:pt-[16px] pb-[24px] md:rounded-lg bg-[#F8F9FA]" tabindex="0">
            <div class="absolute flex w-full top-[16px] right-0 px-[20px] md:px-[24px] justify-end">
                <button class="close-modal p-[14px] rounded-lg hover:bg-blue3/10" aria-label="Close Modal">
                    @include('partials.icons', [
                        'icon' => 'nav-close'
                    ])
                </button>
            </div>
            <div class="body-sm-regular text-blue1/[.62] md:py-[9px]">Share Via</div>
            <div class="flex mt-[8px] gap-[16px]">
                <a href="" data-type="facebook" class="social-share btn-lg-icon !p-[16px] flex items-center" target="_blank" aria-label="Share to Facebook">
                    @include('partials.icons', [
                        'icon' => 'facebook'
                    ])
                </a>
                <a href="" data-type="twitter" class="social-share btn-lg-icon !p-[16px] flex items-center" target="_blank" aria-label="Share to Twitter">
                    @include('partials.icons', [
                        'icon' => 'twitter'
                    ])
                </a>
                <a href="" data-type="linkedin" class="social-share btn-lg-icon !p-[16px] flex items-center" target="_blank" aria-label="Share to LinkedIn">
                    @include('partials.icons', [
                        'icon' => 'linkedin'
                    ])
                </a>
            </div>
            <div class="mt-[16px] body-sm-regular text-blue1/[.62]">
                Copy Link
            </div>
            <div class="grid md:flex mt-[10px]">
                <div class="url-to-copy input input-on-light md:max-w-[228px] overflow-hidden whitespace-nowrap"></div>
                <button class="copy-to-clipboard btn btn-sm-primary md:ml-[4px] mt-[4px] md:mt-0 uppercase" aria-label="Copy URL to Clipboard">
                    Copy
                </button>
            </div>
        </div>
    </div>
</div>

