<section data-component-id="table-layout" class="">
    <div class="container space-between-sections">
        <div class="grid grid-cols-12 mb-[80px]">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-6',
            ])
        </div>

        <div class="grid grid-cols-12 overflow-x-auto bg-neutral-light relative">
            <table class="col-span-12 w-[100%] text-left download-table">
                @if(isset($tableContents['header']) && is_array($tableContents['header']))
                    <thead>
                    <tr class="border-neutral-dark border-b-[1px]">
                        @foreach($tableContents['header'] as $index => $header)
                            <th class="body-md-semibold px-[8px] py-[16px]">
                                @if(isset($header['c']))
                                    {{ trim($header['c']) }}
                                @endif
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                @endif
                <tbody>
                @foreach($tableContents['body'] as $rIndex => $row)
                    <tr class="border-gray4 border-b-[2px]">
                        @foreach($row as $cIndex => $column)
                            @php
                                $bodyClass = 'body-md-' . ($cIndex === 0
                                    ? 'semibold'
                                    : 'regular text-blue1/[.62]');
                            @endphp
                            <td class="text-left px-[8px] py-[16px] md:pt-[48px] {{$bodyClass}}">
                                @if(isset($column['c']))
                                    {!! trim($column['c']) !!}
                                @endif
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
                <caption
                        style="caption-side: bottom"
                        class="w-[100%] text-left mt-[48px] body-sm-regular text-blue1/[.62]">
                    {{$tableContents['caption']}}
                </caption>
            </table>
        </div>
    </div>
</section>