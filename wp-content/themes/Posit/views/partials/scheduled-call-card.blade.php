@php
    $hangoutDetail = $data['customData'];

    list($date, $time)=explode(' ', $hangoutDetail['date_and_time']);
    list($year, $month, $day)=explode('-', $date);
    $monthObj = DateTime::createFromFormat('!m', $month);
    $monthString = $monthObj->format('F');
    $subMonth = substr($monthString,0,3);

    $speaker = serializePost($card['customData']['primary_speaker']);
    $speakerImage = $speaker['image'];
@endphp

<div class="col-span-12 md:col-span-6 bg-gray4/[.20] rounded-[8px] px-[16px] md:px-[40px] pb-[40px] pt-[20px] flex flex-col">
    @if ($hangoutDetail['status'] === 'live')
        <div class="bg-blue3/[.1] ui-medium uppercase text-blue2 px-[16px] py-[4px] rounded-[4px] w-fit">
            Live!
        </div>
    @endif
    <img class="aspect-video object-cover max-h-[307px] rounded-[8px] mt-[24px]" src="{{ $data['image'] ? $data['image'] : $speakerImage }}" alt="{{ $data['title'] }}" />
    <div class="flex flex-col lg:flex-row mt-[16px] h-full">
        <div class="bg-blue3/[.1] px-[24px] py-[10px] lg:p-[24px] flex flex-row lg:flex-col rounded-[8px] w-fit h-fit">
           <div class="sh1 text-blue1">
                {{ $day }}
           </div>
            <div class="flex flex-col ml-[8px] lg:ml-0 body-sm-semibold text-blue1 text-center uppercase">
                <span>
                    {{ $subMonth }}
                </span>
                <span>
                    {{ $year }}
                </span>
            </div>
        </div>
        <div class="flex flex-col mt-[24px] lg:mt-0 lg:ml-[24px]">
            <div class="h4-regular text-blue1 line-clamp-2">
                {{ $data['title'] }}
            </div>
            <div class="body-lg-regular text-blue1/[.62] mb-[32px] line-clamp-4">
                {{ $hangoutDetail['primary_talk_description'] }}
            </div>
            <div class="flex justify-start lg:justify-end mt-auto">
                  @include('partials.cta', [
                      'data' => [
                         'link' => [
                            'title' => 'MORE INFO',
                            'url' => $card['url'],
                            'target' => '_self'
                        ],
                        'button_type' => 'primary',
                        'button_size' => 'md'
                    ],
                    'additional_classes' => '!px-[24px] !py-[12px]'
                  ])
                  @if($hangoutDetail['status'] === 'live')
                      @include('partials.cta', [
                          'data' => [
                            'link' => [
                                'url' => $hangoutDetail['urls']['zoom_link'] ? $hangoutDetail['urls']['zoom_link'] : get_field('zoom_link', 'options'),
                                'title' => 'JOIN CALL',
                                'target' => '_self'
                            ],
                            'button_type' => 'transparent',
                            'button_size' => 'md',
                          ],
                          'additional_classes' => '!px-[24px] !py-[12px] ml-[8px]'
                      ])
                 @endif
             </div>
        </div>
    </div>
</div>
