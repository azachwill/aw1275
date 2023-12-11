<section class="">
    <div class="container grid grid-cols-12">
        @include('partials.table-of-content.mobile-container',[
            'title'=> $placeholder ?? 'Table of content',
            'contents'=> $contentTable,
            'content' => view('partials.table-of-content.list',['contents'=> $contentTable, 'class'=>'lg:mt-[78px]' ]),
            'footer' => $contentTableFooter ?? null,
            'containerClasses' => 'sticky top-0 bg-neutral-light col-span-12 lg:col-span-3 pt-[16px] pb-[16px] lg:py-0 z-[2]'
        ])
        <div class="col-span-0 lg:col-span-1"></div>
        <div class="col-span-12 lg:col-span-8 z-[1]">
            {!!$header!!}
            <div class="wysiwyg-content my-[40px] lg:my-[80px]">
                {!!$content!!}
            </div>
        </div>
    </div>
</section>
