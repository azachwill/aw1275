@php
    $videoMessage = get_field('video_message');
@endphp

<section id="video-message" class="section bg-blue1 py-[40px] lg:pt-[80px]">
    <div class="section-container video-content lg:max-h-[500px] lg:h-full">
        <div class="grid grid-cols-12 gap-x-4">
            <div class="col-span-12 lg:col-span-5">
                <h2 class="h2 text-blue6 max-w-[736px]">
                    {{$videoMessage['title']}}
                </h2>
                <p class="mt-[16px] md:mt-[24px] body-medium lg:body-large xl:body-medium text-blue6 md:max-w-[470px] lg:max-w-[621px] video-text">
                    {{$videoMessage['message']}}
                </p>
            </div>
            <div class="col-span-12 lg:col-span-7 md:col-start-2 mt-[62px] md:mt-[80px] lg:mt-[20%] lg:flex-col-reverse">
                <div class="video-container">
                    {!! $videoMessage['video'] !!}
                </div>
            </div>
        </div>
    </div>
</section>