<div class="grid lg:flex lg:bottom-0 py-[40px] z-10 lg:justify-between lg:items-center border-t lg:border-t border-neutral-light/10">
    <div>
        <div class="ui-small text-neutral-light uppercase">
            {{$navigationLink['banner']['banner_title']}}
        </div>
        <div class="mt-[8px] body-xs-regular text-neutral-light/60">
            {{$navigationLink['banner']['banner_description']}}
        </div>
    </div>
    <div class="mt-[32px] lg:mt-0 lg:mx-[30px] lg:min-w-max">
        @include('partials.links.link', [
            'data' => $navigationLink['banner']['banner_cta']
        ])
    </div>
</div>