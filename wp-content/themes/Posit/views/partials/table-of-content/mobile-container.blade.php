
<div class="{{$containerClasses}} lg:z-[2]">
    <div class="lg:hidden bg-neutral-light">
        <button class="flex dropdown-input w-full justify-between items-center " data-open-modal>
            {{$title}}
            @include('partials.icons', [
                'icon' => 'nav-arrow-down'
            ])
        </button>
    </div>
    <div class="modal z-50 dropdown-modal bg-neutral-light opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center lg:opacity-100 lg:sticky lg:w-auto lg:h-auto lg:block lg:pointer-events-auto lg:top-0">
        <div class="modal-container bg-neutral-light fixed lg:relative w-full h-full z-50 lg:pb-[120px] lg:z-0">
            <div class="menu-content modal-content-container flex flex-col">
                <!--Title-->
                <div class="modal-header lg:hidden container">
                    <div class="flex lg:hidden justify-between items-center px-[8px] py-[20px] md:py-[24px]">
                        <h2 class="text-blue1 body-md-regular my-[8px]">{{$title}}</h2>
                        <button class="btn btn-md-icon !shadow-none" data-close-modal aria-label="Close {{$title}} modal">
                            @include('partials.icons', [
                                'icon' => 'nav-close',
                                'class'=> 'w-[16px] h-[16px]'
                            ])
                        </button>
                    </div>
                </div>

                <!--Content-->
                <div class="table-of-content modal-content h-full lg:h-auto mobile-tablet-only:overflow-y-auto list:list-styles">
                    {!! $content !!}
                </div>

                <!--Footer-->
                @if(isset($contentTableFooter))
                    <div class="modal-footer flex w-full py-[16px] container justify-center border-solid border-gray4 border-t-[1px]">
                        {!! $contentTableFooter !!}
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

