<section>
    <div class="container space-between-sections grid grid-cols-12">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12',
        ])

        @if($partners && count($partners) > 0)
            <div class="grid grid-cols-12 col-span-12 mt-20">
                <div class="col-span-12 md:col-span-10 md:col-start-3 lg:col-span-8 lg:col-start-5">
                    <div class="grid grid-cols-2 col-span-2 md:grid-cols-3 md:col-span-3 gap-x-7 gap-y-20">
                        @foreach($partners as $partnerPost)
                            <div class="col-span-1">
                                @include('partials.partner-card', ['partner' => serializePost($partnerPost)])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif

        @include('components.modal', ['modalContent' => 'partners', 'theme' => 'light'])
    </div>
</section>