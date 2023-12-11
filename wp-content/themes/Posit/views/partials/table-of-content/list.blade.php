<ul class="{{$class ?? ''}} toc-list px-[20px] md:px-[60px] lg:px-0">
    @foreach($contents as $index => $content)
        <li>
            <a class="block body-sm-regular bg-transparent text-blue1/[.62] hover:text-blue1 hover:bg-gray4/20 focus:text-blue1 focus:shadow-[inset_0_0_0_3px_rgba(50,118,181,0.25)] focus:bg-gray5 focus:outline-neutral-light active:text-blue1 py-[12px] px-[8px] border-b-[1px] border-b-solid border-b-neutral-gray" href="{{$content['link']}}"
               data-ref="{{$content['link']}}"
               target="{{$content['target'] ?? '_self'}}">
                {{$content['label']}}
            </a>
            @if(isset($content['subcontent']))
                <ul class="toc-sublist">
                    @foreach($content['subcontent'] as $ind => $subcontent)
                        <li>
                            <a class="block body-sm-regular py-[12px] px-[32px] text-blue1/[.62] active:text-blue1 border-b-[1px] border-b-solid border-b-neutral-gray" href="{{$subcontent['link']}}" target="{{$subcontent['target'] ?? '_self'}}">
                                {{$subcontent['label']}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
