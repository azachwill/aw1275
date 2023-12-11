<section class="timeline-section space-between-sections">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-6">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
        </div>

        <div class="mt-[60px] md:mt-[40px] text-center lg:hidden">
            <div class="timeline-line">
                @foreach($events as $event)
                    <div class="first:pt-[80px] pt-[120px]">
                        <div class="timeline-dot"></div>
                        <div class="relative z-10 bg-neutral-light">
                            <p class="ui-large text-blue1/[.62] !leading-8">
                                {{ $event['year'] }}
                            </p>
                            <div class="mt-[4px] h5">
                                {!! $event['description'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
    {{--DESKTOP--}}

    <div class="timeline pinned-timeline container mt-[124px]">
        <div class="hidden lg:block py-[16px]">
            <div class="flex w-max pr-[80px] timeline-horizontal">
                @foreach($events as $key => $event)
                <div class="timeline-event-container relative z-10 h-fit py-[40px] w-[400px] {{ $key % 2 !== 0 ? 'even' : 'odd'}}">
                    <div class="timeline-progress-bar">
                        <div class="progress"></div>
                    </div>
                    <div class="timeline-dot"></div>
                    <div class="timeline-event relative bg-neutral-light text-center w-[300px] mx-[50px]">
                        <p class="ui-large text-blue1/[.62] !leading-8">
                            {{ $event['year'] }}
                        </p>
                        <div class="mt-[4px] h5 text-blue1 overflow-y-hidden">
                            {!! $event['description'] !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
