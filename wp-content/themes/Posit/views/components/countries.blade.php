@php
    $perColumnLarge = ceil(count($countries)/4);
    $perColumnMedium = ceil(count($countries)/2);
    $countriesListLarge = array_chunk($countries, $perColumnLarge, true);
    $countriesListMedium = array_chunk($countries, $perColumnMedium, true);
@endphp

<div class="container mb-[80px]">
    <div class="grid grid-cols-12 gap-[16px] lg:gap-[28px] mt-[80px]">
        <div class="col-span-12 lg:col-span-8">
            <{{$hero['heading_tag']}} class="h2">
                {{ $hero['title'] }}
            </{{$hero['heading_tag']}}>
        
            @if(!empty($hero['description']))
                <p class="body-lg-regular text-blue1/[.62] mt-[24px]">
                    {{ $hero['description'] }}
                </p>
            @endif
        </div>
    </div>
    
    {{--Desktop--}}
    <div class="country-list grid grid-cols-12 gap-[16px] lg:gap-[28px] mt-[80px] hidden lg:grid">
        @foreach($countriesListLarge as $country)
            <div class="col-span-12 md:col-span-6 lg:col-span-3 body-lg-regular">
                <ul class="list-disc list-inside">
                    @foreach($country as $item)
                        <li>{{ $item['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    
    {{--Tablet--}}
    <div class="country-list grid grid-cols-12 gap-[16px] lg:gap-[28px] mt-[80px] hidden md:grid lg:hidden">
        @foreach($countriesListMedium as $country)
            <div class="col-span-12 md:col-span-6 lg:col-span-3 body-lg-regular">
                <ul class="list-disc list-inside">
                    @foreach($country as $item)
                        <li>{{ $item['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    
    {{--Mobile--}}
    <div class="country-list grid grid-cols-12 gap-[16px] mt-[80px] md:hidden">
        <div class="col-span-12 md:col-span-6 lg:col-span-3 body-lg-regular">
            <ul class="list-disc list-inside">
                @foreach($countries as $country)
                    <li>{{ $country['name'] }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    
    @if($cta)
        <div class="flex justify-center mt-[80px] mt-[120px]">
            @include('partials.cta', [
                'data' => $cta,
            ])
        </div>
    @endif
</div>