@php
    $cards = [];
    $type = 'post';
    if ($content === 'latest_posts') {
        $cards = getLatestPosts();
    } else if ($content === 'select_posts') {
        $cards = $posts;
    } else {
        $type = 'card';
        $cards = $contentCards;
    }
@endphp
<section class="sliding-cards overflow-hidden">
    <div class="container space-between-sections pr-0 lg:pr-[80px]">
        <div class="grid grid-cols-12 gap-x-[28px] mb-[24px] md:mb-[80px] pr-[20px] pr-[40px] pr-0">
            <div class="col-span-12 lg:col-span-5">
                @if(!!$title)
                    <h2 class="h2">
                        {{ $title }}
                    </h2>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-12 lg:gap-[28px] hidden lg:grid">
            @foreach($cards as $index => $card)
               @php
                    if (gettype($card) === 'object') {
                        $card = serializePost($card);
                    }
               @endphp
                <div class="col-span-4">
                    @include('partials.card', [
                        'data' => $type === 'post'
                            ? [
                                'icon' => null,
                                'title' => $card['title'],
                                'link_options' => 'link',
                                'url' => $card['url'],
                                'description' => $card['excerpt'],
                                'post_link' => true,
                                'add_link' => true,
                            ]
                            : $card,
                        'containerClasses' => 'h-full'
                    ])
                </div>
            @endforeach
        </div>

        <div class="glide block lg:hidden">
            <div class="glide__track overflow-hidden" data-glide-el="track">
                <div class="gap-[16px] flex flex-row">
                    <!-- TODO: Pull CPT From backend, hardcoded for now -->
                    @foreach($cards as $index => $card)
                        @php
                            if (gettype($card) === 'object') {
                                $card = serializePost($card);
                            }
                        @endphp
                        <div class="glide__slide">
                            @include('partials.card', [
                                'data' => $type === 'post'
                                    ? [
                                        'icon' => null,
                                        'title' => $card['title'],
                                        'link_options' => '',
                                        'url' => $card['url'],
                                        'description' => $card['excerpt'],
                                        'post_link' => true,
                                        'add_link' => true,
                                    ]
                                    : $card,
                                'containerClasses' => 'h-full'
                            ])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>
