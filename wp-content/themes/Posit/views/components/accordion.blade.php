<section class="accordion">
    <div class="container grid grid-cols-12 space-between-sections">
         @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
        ])
        <div class="faqs mt-[60px] md:mt-[80px] lg:mt-[120px] col-span-12">
            @if($questions)
                @foreach($questions as $index => $question)
                    <div class="accordion-tab bg-gray4/20 mt-[8px] first-of-type:mt-0 transition-colors duration-300 hover:bg-blue3/[.1] active:bg-blue3/[.2] rounded-[8px] focus-within:shadow-focus-accordion outline-0">
                        <div class="accordion rounded-[8px] flex flex-row justify-between w-full cursor-pointer transition-height duration-300 text-left py-[24px] px-[24px] lg:px-[32px] lg:py-[32px] outline-0" tabindex="0" role="button">
                            <h3 class="h5 mr-[36px]">
                                {{ $question['question']['title'] }}
                            </h3>
                            @include('partials.icons', [
                                'icon' => 'plus',
                                'class' => 'plus-icon mt-[15px] transition-all duration-300'
                            ])
                            @include('partials.icons', [
                                'icon' => 'minus',
                                'class' => 'minus-icon mt-[25px] hidden'
                            ])
                        </div>
                        <div class="answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="body-md-regular px-[24px] pb-[24px] lg:px-[32px] lg:pb-[32px] text-neutral-dark/[.62]">
                                {!! $question['question']['answer'] !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
