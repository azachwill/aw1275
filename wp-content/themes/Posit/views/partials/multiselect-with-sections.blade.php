<div class="h-full">
    <div class="relative">
        <select class="hidden" id="filter-select" multiple>
            <option value="">Filter by</option>
            @if(isset($dropdownOptions))
                @foreach($dropdownOptions as $key => $section)
                    <optgroup class="" label="{{ $section['name'] }}">
                        @foreach($section['options'] as $index => $option)
                            <option value="{{ $option['id'] }}"
                                data-id="{{ $option['id'] ?? '' }}"
                                data-name="{{ $option['name'] ?? '' }}"
                                data-type="{{ $option['type'] ?? '' }}"
                                data-slug="{{ $option['slug'] ?? '' }}"
                            >
                                {{ $option['title'] }}
                            </option>
                        @endforeach
                    </optgroup>
                @endforeach
            @endif
        </select>
    </div>
</div>
