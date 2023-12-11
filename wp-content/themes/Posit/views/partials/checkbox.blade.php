<div class="dropdown-option flex border-b-[0.5px] lg:last-of-type:border-b-0 border-gray4">
    <div class="flex justify-between w-full">
        <input
            value="yes"
            type="checkbox"
            data-id="{{ $id ?? '' }}"
            data-name="{{ $name ?? '' }}"
            data-type="{{ $type ?? '' }}"
            data-slug="{{ $slug ?? '' }}"
            id="option-checkbox-{{$index}}"
            class="checkbox-input w-0 h-0 opacity-0">
        <label for="option-checkbox-{{$index}}" class="w-full relative flex py-[10px] px-[8px] items-center cursor-pointer body-md-regular text-blue1/[.62]">
            {{ $title }}
        </label>
    </div>
</div>