@php
    $cards = getUpcomingHangouts(['live', 'upcoming'], 4);
@endphp

@if(sizeof($cards))
    <section class="section-upcoming-hangouts-cards">
        <div class="container space-between-sections grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8',
            ])
            <div class="grid grid-cols-12 col-span-12 mt-[80px] lg:mt-[120px] gap-[28px]">
                @foreach($cards as $index => $card)
                    @include('partials.scheduled-call-card', [
                        'data' => $card,
                    ])
                @endforeach
            </div>
        </div>
    </section>
@endif
