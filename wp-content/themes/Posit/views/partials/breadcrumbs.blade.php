@php
    $pages = isset($pages)? $pages: [];
    $totalPages = sizeof($pages);
    $prevPage = $totalPages > 1 ? $pages[$totalPages-2] : null;
@endphp

<div class="breadcrumbs-container py-[32px] absolute w-full">
    <div class="container grid grid-cols-12">
        <div class="col-span-12">
            {{--DESKTOP--}}
            <ul class="breadcrumbs hidden lg:flex">
                @foreach($pages as $key => $page)
                    @php
                    // $page->guid will be used for native archive pages
                    $href = isset($page->ID) ?  get_permalink($page->ID): $page->guid;
                    // $page->label will be used for native archive pages
                    $text = $page->label ?? $page->post_title
                    @endphp
                    @if($key < $totalPages-1)
                        <li class="relative flex items-center">
                            <a class="title before:content-none link-sm-light !font-medium" href="{{$href}}" aria-label="Link to {{$text}}">
                                {{$text}}
                            </a>
                            <div class="mx-[12px]">
                                @include('partials.icons', [
                                    'icon' => 'nav-arrow-right',
                                    'class' => 'fill-neutral-dark'
                                ])
                            </div>
                        </li>
                    @else
                        <li class="relative flex items-center">
                            <span class="title ui-small text-blue3 uppercase">{{$text}}</span>
                        </li>
                    @endif
                @endforeach
            </ul>
            {{--MOBILE--}}
            @if($prevPage)
                <ul class="breadcrumbs flex lg:hidden">
                    <li class="relative flex items-center w-full">
                        <a href="{{get_permalink($prevPage->ID)}}" class="flex items-center max-w-full" aria-label="Go back to {{$prevPage->post_title}}">
                            <div class="mr-[4px]">
                                @include('partials.icons', [
                                    'icon' => 'link-arrow-left',
                                ])
                            </div>
                            <span class="title before:content-none link-sm-light !font-medium ellipsis truncate max-w-full">
                                {{$prevPage->post_title}}
                            </span>
                        </a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</div>
