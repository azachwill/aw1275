<section class="text-columns">
    <div class="container space-between-sections grid grid-cols-12 md:gap-x-[16px] lg:gap-x-[28px] gap-y-[60px]">
        @foreach($columns as $column)
            <div class="col-span-12 md:col-span-6 lg:col-span-4">
                <div class="h4 text-neutral-dark">
                    {{ $column['title'] }}
                </div>
                <div class="mt-[16px] body-lg-regular text-blue1/[.62]">
                    {{ $column['description'] }}
                </div>
            </div>
        @endforeach
    </div>
</section>