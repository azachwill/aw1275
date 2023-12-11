<div class="[&:not(:last-of-type)]:mb-[40px] relative" data-component-id="code-snippet">
    <div class="text-center mb-[24px]">
        <span class="ui-large uppercase">
            {{ $codeSnippet['title'] }}
        </span>
    </div>
    <div class="flex flex-col md:flex-row justify-between px-[16px] py-[40px] lg:px-[40px] bg-gray4/[.2]">
        <div class="flex flex-row justify-between md:hidden mb-[28px]">
            @include('partials.icons', [
              'icon' => 'snippet-arrow',
              'class' => 'snippet-arrow'
          ])
            <button class="mobile-copy-button relative" aria-label="Copy snippet to clipboard">
                @include('partials.icons', [
                    'icon' => 'copy-snippet',
                    'class' => 'copy-snippet'
                ])
            </button>
        </div>
        <div class="flex flex-row">
            <div class="hidden md:flex md:pr-[28px]">
                @include('partials.icons', [
                    'icon' => 'snippet-arrow',
                ])
            </div>
            <div class="code-snippet">
                <p class="ui-medium text-blue1/[.62] max-w-[545px] break-words break-all">
                    {!! do_shortcode($codeSnippet['code_snippet']) !!}
                </p>
            </div>
        </div>
        <div class="self-center hidden md:flex md:pl-[28px]">
            <button class="copy-button relative" aria-label="Copy snippet to clipboard">
                @include('partials.icons', [
                    'icon' => 'copy-snippet',
                ])
            </button>
        </div>
    </div>
    @if($codeSnippet['add_build_revision'])
        @php
            $product = getProductDetails($codeSnippet['revision_select'])
        @endphp
        @if($product)
            @include('partials.downloads.installer-information', compact('product'))
        @endif
    @endif
</div>
