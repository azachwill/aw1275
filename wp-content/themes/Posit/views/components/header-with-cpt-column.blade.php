<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-11 lg:col-span-6'
            ])
        </div>
        <div class="mt-[80px] lg:mt-[42px] md:grid md:grid-cols-12 lg:grid-rows-{{count($posts)}} md:gap-x-[16px] lg:gap-x-[28px] md:gap-y-[60px]">
            @foreach($posts as $index => $post)
                @php
                    $post = serializePost($post);
                @endphp
                <div class="col-span-12 md:col-span-5 flex flex-wrap md:odd:col-start-3 md:even:col-start-8 lg:odd:col-start-7 lg:even:col-start-7 lg:col-span-6 mb-[76px] md:mb-0">
                    @include('partials.post-card', [
                        'data' => $post,
                        'CTAText' => 'Learn More'
                    ])
                </div>
            @endforeach
        </div>
    </div>
</section>