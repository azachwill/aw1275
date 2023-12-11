@php
    $index = $key ?? 0;
    $isSection = $isSection ?? false;
@endphp

<div data-step="{{ $index }}" class="space-between-sections grid grid-cols-12 {{ $isSection ? 'container' : '' }}">
    <div class="col-span-12 lg:col-span-6">
        @include('partials.header', [
            'data' => $step['header'],
            'buttonContainerClasses' => 'flex flex-col md:flex-row',
            'button_classes' => 'sm:first-of-type:mr-0 md:first-of-type:mr-[16px] first-of-type:mb-[16px] md:first-of-type:mb-0'
        ])
    </div>
    @if($step['add_code_snippets'])
        <div class="col-span-12 lg:col-span-7 md:col-start-4 lg:col-start-6 mt-[80px] md:mt-[120px]">
            @foreach($step['code_snippets'] as $index => $codeSnippet)
                @include('partials.code-snippet', [
                        'codeSnippet' => $codeSnippet
                ])
            @endforeach
        </div>
    @endif
</div>
