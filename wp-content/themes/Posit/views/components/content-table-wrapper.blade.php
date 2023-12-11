<div class="{{$class}}">
    <button class="modal-open dropdown-input w-full flex justify-between items-center">
        {{$title}}
        @include('partials.icons', [
            'icon' => 'nav-arrow-down'
            ])
    </button>
    <div class="modal bg-neutral-light opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-overlay absolute w-full h-full bg-neutral-light z-50"></div>
        <div class="modal-container fixed w-full h-full z-50">
            <div class="modal-content-container container h-full flex flex-col">
                <!--Title-->
                <div class="modal-header flex justify-between items-center px-[16px] py-[20px] md:px-[8px] md:py-[24px]">
                    <h2 class="text-blue1 body-md-regular my-[8px]">{{$title}}</h2>
                    <button class="modal-close shadow-none btn btn-md-icon mr-[8px]">
                        @include('partials.icons', [
                            'icon' => 'nav-close',
                            'class'=> 'w-[16px] h-[16px]'
                        ])
                    </button>
                </div>
                <!--Content-->
                <div class="modal-content h-full overflow-y-auto">
                    @include('partials.table-of-content.list', [
                        'contents'=> $contents,
                        'class' => 'lg:py-[80px]'
                    ])
                </div>

                <!--Footer-->
                <div class="modal-footer flex w-full py-[20px]">
                    @include('partials.cta', [
                        'data' => ['url'=>'#','button_size'=>'lg','button_type'=>'primary','title'=>'Apply'],
                        'additional_classes' => 'modal-close'
                    ])
                </div>

            </div>
        </div>
    </div>
</div>
