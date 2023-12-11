@php
    $cardMarkup = '';
    $numberCards = isset($priceCards) && is_array($priceCards) ? count($priceCards) : 0;
    
    if ($numberCards == 1){
        $cardMarkup = 'col-span-full md:col-span-6 lg:col-span-5';
    }else if ($numberCards == 2){
        $cardMarkup = 'col-span-full md:col-span-6 lg:col-span-5';
    }else{
        $cardMarkup = 'col-span-full md:col-span-4';
    }
@endphp

<section class="price-table">
    <div class="grid grid-cols-12 container space-between-sections lg:gap-x-[28px]">
        @include('partials.header', [
            'data' => $header,
            'containerClasses' => 'col-span-12 lg:col-span-6',
            'button_classes' => '[&:not(:first-of-type)]:ml-[16px]'
        ])
        @if(isset($priceCards) && is_array($priceCards))
            <div class="grid grid-cols-12 col-span-full md:gap-x-[16px] md:gap-x-[28px] mt-[80px] lg:mt-[120px]">
            @foreach($priceCards as $key => $card)
                @php
                    $price = $card['price'] == 0 ? 'Free' : '$'.$card['price'];
                    
                    $colStart = '';
                    if ($key == 0 && $numberCards == 1){
                        $colStart = 'lg:col-start-8';
                    }else if($key == 0 && $numberCards == 2){
                        $colStart = 'lg:col-start-3';
                    }
                @endphp

                <div class="[&:not(:first-child)]:mt-[16px] {{ $colStart }} {{ $cardMarkup }} {{$card['most_popular'] ? 'md:!mt-0' : 'md:!mt-[53px]'}}">
                    @if($card['most_popular'])
                        <div class="flex w-full h-[53px] bg-blue2 rounded-lg rounded-b-none justify-center items-center">
                            <div class="body-md-semibold text-neutral-light">
                                {{ !empty($card['most_popular_text']) ? $card['most_popular_text'] : 'Most Popular' }}
                            </div>
                        </div>
                    @endif
                    <div class="px-[8px] py-[40px] lg:px-[32px] rounded-lg border border-blue3/40 {{$card['most_popular'] ? 'bg-blue3/10 rounded-t-none shadow-[0_30px_40px_-10px_rgba(190,198,209,0.5)]' : 'bg-gray4/20'}}">
                        <div class="flex flex-col justify-center w-full h-full py-[32px] lg:py-[40px] text-center text-blue1 md:min-h-[550px] lg:min-h-[500px]">
                            <div class="h5-regular">
                                {{ $card['title'] }}
                            </div>
                            <div class="mt-[4px] body-sm-regular">
                                {{ $card['description'] }}
                            </div>
                            <div class="mt-[28px] body-sm-regular">
                                {{ $card['starting_at'] }}
                            </div>
                            <div class="flex justify-center">
                                <div class="h3-regular">
                                    {{ $price }}
                                </div>
                                <div class="ml-[8px] self-center body-sm-regular">
                                    {{ $card['period'] }}
                                </div>
                            </div>
                            <div class="mt-[28px] body-sm-regular">
                                {{ $card['users_type'] }}
                            </div>
                            <div class="flex justify-center mt-[32px]">
                                @include('partials.cta', [
                                    'data' => $card['cta'],
                                    'additional_classes' => 'w-fit h-full'
                                ])
                            </div>
                        </div>
                        @if(!empty($card['benefits_group']))
                            @foreach($card['benefits_group'] as $benefitGroup)
                                @if($benefitGroup['add_benefit_group_header'])
                                    <div class="w-full h-full py-[40px]">
                                        <div class="px-[16px] body-lg-semibold text-blue3 uppercase">
                                            {{ $benefitGroup['benefit_group_header'] }}
                                        </div>
                                        <div class="flex relative mt-[4px] w-full items-center">
                                            <div class="absolute w-full h-[0.5px] bg-blue3/60 top-[50%] translate-y-[-50%] origin-center"></div>
                                            <div class="absolute w-[49%] h-[2px] bg-blue3"></div>
                                        </div>
                                    </div>
                                @endif
                                @foreach($benefitGroup['benefits'] as $benefit)
                                    <div class="flex w-full h-full border-b border-blue3/20 py-[16px] px-[8px]">
                                        @if($benefit['add_checkmark'])
                                            @include('partials.icons', [
                                                'icon' => 'check',
                                                'class' => 'mr-[15px] self-center w-[16px] h-[16px] shrink-0'
                                            ])
                                        @endif
                                        <div class="body-md-regular text-blue1 break-words overflow-auto link:link-light">
                                            {!! $benefit['benefit'] !!}
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
        @endif
    </div>
</section>
