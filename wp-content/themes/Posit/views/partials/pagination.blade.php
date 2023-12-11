@php
    $hidePages = $currentPage < 3 ? '[&:nth-child(n+5)]:hidden md:[&:nth-child(n+5)]:flex' : '[&:nth-child(-n+2)]:hidden md:[&:nth-child(-n+2)]:flex'
@endphp

<div data-pages="{{ $pages }}" class="pagination-container col-span-12 flex justify-center">
    <a
        data-page-number="{{ $currentPage > 1 ? ($currentPage - 1) : 1}}"
        aria-label="Go to previous page"
        class="pagination-page prev flex justify-center items-center bg-neutral-light hover:bg-blue3/[.1] border border-blue3 rounded-[4px] w-[48px] h-[48px] mr-[8px] active:border-2 disabled:border disabled:border-gray4 disabled:text-gray2">
            <span class="left-arrow">
                @include('partials.icons', [
                    'icon' => 'previous',
                    'class' => 'w-[16px] h-[16px]'
                ])
            </span>
    </a>

    <div class="pagination flex">
        @foreach(getShortPagination($pages, $currentPage) as $page)
            <a
                data-page-number="{{$page}}"
                aria-label="Go to page {{$page}}"
                class="pagination-page page flex justify-center items-center text-blue1/[.62] hover:text-blue1/[.62] body-md-semibold w-[48px] h-[48px] rounded-[4px] hover:bg-gray4/[.4] focus:border focus:border-bg-neutral-light/[.1] {{ $hidePages }} {{ $currentPage == $page ? 'active' : '' }}">
                    {{$page}}
            </a>
        @endforeach
    </div>

    <a
        aria-label="Go to next page"
        data-page-number="{{ $currentPage < $pages ? ($currentPage + 1) : $pages}}"
        class="pagination-page next flex justify-center items-center bg-neutral-light hover:bg-blue3/[.1] border border-blue3 rounded-[4px] w-[48px] h-[48px] ml-[8px] active:border-2 disabled:border disabled:border-gray4 disabled:text-gray2">
            <span class="right-arrow">
                @include('partials.icons', [
                    'icon' => 'next',
                    'class' => 'w-[16px] h-[16px]'
                ])
            </span>
     </a>
</div>
