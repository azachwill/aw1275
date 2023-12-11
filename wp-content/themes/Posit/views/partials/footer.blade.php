@php
    $footer = get_field('footer_content', 'options')
@endphp

<footer class="border-t border-blue1/[.20]">
    <div class="container px-[20px] lg:px-[80px] pt-[40px] lg:pt-[80px] pb-[24px] lg:pb-[16px]">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-2 mr-0 md:mr-[40px] lg:mr-[28px]">
                <img src="{{ $footer['logo_description']['logo']['url'] }}" alt="{{ $footer['logo_description']['logo']['alt'] }}"/>
                <p class="body-sm-regular text-blue1/[.62] mt-[25px]">
                    {{ $footer['logo_description']['description'] }}
                </p>
            </div>
            @if(isset($footer['menu']))
                @foreach($footer['menu'] as $index => $option)
                    <div class="col-span-6 md:col-span-3 lg:col-span-2 mt-[40px] lg:mt-0 even:mr-[8px] md:[&:not(:nth-last-child(2))]:mr-[40px] lg:mr-[28px]">
                        <p class="ui-small uppercase text-blue1">
                            {{ $option['title'] }}
                        </p>

                        @if($option['options'])
                            <div class="flex flex-col mt-[24px]">
                                @foreach($option['options'] as $index => $link)
                                    <a
                                        class="ui-small uppercase mt-[16px] text-blue1/[.62] duration-[80] ease-in-out hover:text-blue1"
                                        href="{{ $link['option']['url'] }}">
                                            {{ $link['option']['title'] }}
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
            <div class="col-span-12 lg:col-span-2 mt-[40px] lg:mt-0">
                <p class="ui-small uppercase text-blue1">
                    {{ $footer['contact_info']['title'] }}
                </p>
                <div class="flex flex-col mt-[24px]">
                    <span class="ui-small uppercase text-blue1/[.62]">
                        {{ $footer['contact_info']['address'] }}
                    </span>
                    <span class="ui-small uppercase mt-[16px] text-blue1/[.62]">
                        {{ $footer['contact_info']['phone_number'] }}
                    </span>
                    <span class="ui-small uppercase mt-[16px] text-blue1/[.62] link:link-light">
                        <a href="mailto:{{$footer['contact_info']['email']}}" target="_blank" rel="noopener noreferrer">
                            {{ $footer['contact_info']['email'] }}
                        </a>
                    </span>
                </div>
                <div class="flex mt-[24px]">
                    @if($footer['contact_info']['social_media'])
                         @foreach($footer['contact_info']['social_media'] as $index => $social)
                              @include('partials.cta', [
                                   'data' => $social,
                                   'icon' => $social['icon'],
                                   'icon_classes' => 'w-[16px] h-[16px] min-w-[16px] ',
                                   'additional_classes' => '[&:not(:first-of-type)]:ml-[16px] !p-[12px] flex items-center'
                              ])
                         @endforeach
                     @endif
                </div>
            </div>
        </div>
        @if(!empty($footer['legend']))
            <div class="grid grid-cols-12 mt-[32px]">
                <div class="col-span-12 lg:col-span-2">
                    <p class="ui-small uppercase text-blue1/[.62]">
                        {{ $footer['legend']}}
                    </p>
                </div>
            </div>
        @endif
        <div class="grid grid-cols-12 mt-[57px] lg:mt-[49px]">
            <div class="col-span-12 lg:col-span-8 text-center lg:text-start flex items-end justify-center lg:justify-start">
                <span class="body-sm-regular text-blue1/[.62]">© <?php echo date("Y"); ?> {{ $footer['copyright'] }} </span>
            </div>
            <div class="col-span-12 lg:col-span-4 text-center lg:text-end justify-center lg:justify-end flex flex-col lg:flex-row">
                <a
                    class="body-sm-regular mt-[16px] text-blue1/[.62] duration-[80] ease-in-out hover:text-blue1"
                    href="{{ $footer['terms_and_conditions']['url'] }}">
                        {{ $footer['terms_and_conditions']['title'] }}
                </a>
                <a
                    class="body-sm-regular mt-[16px] text-blue1/[.62] ml-0 lg:ml-[40px] duration-[80] ease-in-out hover:text-blue1"
                    href="{{ $footer['privacy_policy']['url'] }}">
                        {{ $footer['privacy_policy']['title'] }}
                </a>
            </div>
        </div>
    </div>
</footer>