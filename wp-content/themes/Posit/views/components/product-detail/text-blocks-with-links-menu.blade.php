@php
    $sideMenuContent = [];
    $linksMenu = $linksMenu ?? [];

    foreach ($linksMenu as $link) {
        $sideMenuContent[] = [
            'link'=> $link['link']['url'],
            'label' => $link['link']['title'],
            'target'=> $link['link']['target'],
        ];
    }
@endphp

<section class="text-blocks-with-links-menu relative">

    <div class="container grid grid-cols-12 lg:gap-x-[28px] space-between-sections">
        <div class="col-span-12 lg:col-span-3">
            <div class="flex flex-col sticky top-[80px] hidden lg:block">
                @include('partials.table-of-content.list', ['contents' => $sideMenuContent])
            </div>

            <div class="flex flex-col sticky top-[80px] lg:hidden">
                @include('partials.table-of-content.mobile-container',[
                    'title'=> 'Other Resources',
                    'contentTableFooter' => null,
                    'contents'=> $sideMenuContent,
                    'content' => view('partials.table-of-content.list', ['contents'=> $sideMenuContent]),
                    'containerClasses' => 'bg-neutral-light col-span-12 lg:col-span-3 pb-[40px] lg:py-0 z-[2]'
                ])
            </div>
        </div>

        <div class="col-span-12 lg:col-span-8 lg:col-start-5">
            @foreach($textBlocks as $textBlock)
                <div class="[&:not(:first-child)]:mt-[40px]">
                    <h2 class="h5-regular">
                        {{ $textBlock['title'] }}
                    </h2>
                    
                    <p class="body-md-regular link:link-light text-blue1/[.62] mt-[16px]">
                        {!! $textBlock['description'] !!}
                    </p>
                </div>
            @endforeach
    
            <div class="flex mt-[40px]">
                @include('partials.cta', [
                    'data' => $cta,
                ])
            </div>
        </div>
    </div>

</section>
