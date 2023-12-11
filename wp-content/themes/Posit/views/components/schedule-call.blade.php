@php
    $queryVar = get_query_var('booking_calendar__c');
@endphp
<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12 lg:gap-[28px]">
            <div class="col-span-12 lg:col-span-5">
                @include('partials.header', [
                    'data' => $header,
                ])
            </div>
            
            <div class="col-span-12 lg:col-span-7 rounded-lg">
                <iframe src="{{ $chilliPiperUrl . $queryVar }}" title="chilli piper" class="w-full h-[1000px] mt-[60px] lg:mt-[0px] rounded-lg"></iframe>
            </div>
        </div>
    </div>
</section>
