<div class="{{ $containerClasses }}">
    @if($title)
        <h1 class="h2">
            {{$title}}
        </h1>
    @endif
    <div class="block md:flex md:justify-between items-center mt-[24px] md:mt-[40px]">
        <div class="block w-full md:w-auto">
            @if ($data['author'])
                <p class="body-md-regular text-blue1/[.62]">
                    {{ $data['author'] }}
                </p>
            @endif
            @if ($data['last_updated'])
                <p class="body-md-semibold text-blue1 mt-[4px]">
                    {{ $data['last_updated'] }}
                </p>
            @endif
        </div>

        @if ($data['file'])
            <div class="block w-full mt-[24px] md:mt-0 md:w-auto">
                @include('partials.cta', [
                    'data' => [
                        'link'=> [
                            'title'=>'Download PDF',
                            'target'=>'_blank',
                            'url'=> $data['file']
                            ],
                            'button_size'=>'md',
                            'button_type'=>'secondary',
                        ],
                    'additional_classes' =>'block'
                ])
            </div>
        @endif
    </div>
</div>
