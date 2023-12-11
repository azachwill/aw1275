<section class="video-embed col-span-full subscribe mt-[8px]">
    @if($modalTitle)
    <div class="modal-title mb-[16px] text-blue1 h3">
        {{ $modalTitle }}
    </div>
    @endif
    @if($modalDesc)
    <p class="modal-description mb-[16px] mt-[24px] text-blue1/[.62] body-md-regular">
        {{ $modalDesc }}
    </p>
    @endif
    <div class="video-embed__snippet mt-[40px]">
        {!! $modalVideoEmbed !!}
    </div>
</section>
