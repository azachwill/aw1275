@foreach($companies as $index => $company)
    @php
        $serialized = serializePost($company);
    @endphp
    @if(!empty($serialized))
        <img class="pr-[56px] lg:pr-[104px] max-w-[220px] w-full object-contain max-h-min" src="{{ $serialized['image'] }}" alt="{{ $serialized['imageAlt'] }}"/>
    @endif
@endforeach