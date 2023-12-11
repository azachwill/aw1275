

@if(isset($product) && is_object($product))

    <div class="{{ $className ?? 'mt-[40px] body-md-regular' }}">
        <span>
            Size: {{ $product->pretty_size }}
        </span>

        <span> | </span>
        <div class="sha-container relative inline-block">
            <a tabindex="0" class="link link-md-light sha !inline-block cursor-pointer" aria-label="Open sha modal">
                SHA-256: {{ $product->sha256_short }}
            </a>
            <div class="tooltip hidden text-neutral-light absolute break-words h-fit top-[26px] right-[-30%]">
                <div class="flex justify-between">
                    <span class="body-md-semibold">
                        SHA-256
                    </span>
                    <button class="close-button" aria-label="Close sha modal">
                        @include('partials.icons', ['icon' => 'close-icon'])
                    </button>
                </div>
                <p class="body-md-regular mt-[10px]" tabindex="0">
                    {{ $product->sha256 }}
                </p>
            </div>
        </div>

        <span> | </span>
        <span>Version: {{ $product->version }}</span>

        <span> | </span>
        <span>Released: {{ $product->last_modified }}</span>
    </div>
@endif