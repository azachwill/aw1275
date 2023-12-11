@foreach($contents as $content)
    @if($content['type']==='section')
        <section class="mt-[80px] first:mt-0" id="{{get_string_without_spaces($content['title'])}}">
            {!! $content['content_html'] !!}
        </section>
    @endif
@endforeach
