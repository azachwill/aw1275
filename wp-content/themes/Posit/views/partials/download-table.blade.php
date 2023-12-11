@php
    $productInstaller = $product . '/stable/desktop/installer';
    $productArchive = $product . '/stable/desktop/archive';
    $installersTableData = getProductDetails($productInstaller);
    $archiveTableData = getProductDetails($productArchive);
@endphp
<section class="section-container container grid grid-cols-12 space-between-sections">
    <div class="col-span-12">
        <div class="pt-[24px] px-[24px] bg-blue2">
            <div class="flex flex-row justify-between w-full relative transition-height duration-300 text-left">
                <span class="body-lg-semibold text-neutral-light mr-[36px] mb-[24px]">
                    {{ $expandableTitle }}
                </span>
            </div>
            <div class="overflow-hidden bg-neutral-light mx-[-24px] relative">
                <div class="grid grid-cols-12 download-table">
                    <div class="flex flex-col col-span-12 md:col-span-8 lg:col-span-6 mb-[80px] ">
                        <h3 class="h3 text-blue1 mt-[80px]">
                            {{ $tableTitle }}
                        </h3>
                        <p class="body-md-regular text-blue1/[.62] mt-[24px] link:link-light">
                            {!! $tableDescription !!}
                        </p>
                    </div>
                    <span class="hidden md:block col-span-3 col-start-1 body-md-semibold">
                        OS
                    </span>

                    <span class="hidden md:block col-span-5 body-md-semibold">
                        Download
                    </span>

                    <span class="hidden md:block col-span-2 body-md-semibold">
                        Size
                    </span>

                    <span class="hidden md:block col-span-2 body-md-semibold">
                        SHA-256
                    </span>

                    <div class="mt-[16px] hidden mb-[16px] md:block col-span-12 border-neutral-dark border-b-[1px]"></div>

                    @foreach($installersTableData as $index => $product)
                        <span class="text-center md:text-left col-span-12 md:col-span-3 lg:col-start-1 body-md-semibold">
                            {{ $product->platform->name }}
                        </span>

                        <a class="justify-self-center md:justify-self-start text-center md:text-left col-span-12 md:col-span-5 link-md-light flex-inhe" href="{{ $product->url }}">
                            {{ $product->basename }}
                            @include('partials.icons', ['icon' => 'download', 'class' => 'ml-[4px]'])
                        </a>

                        <span class="text-center md:text-left col-span-12 md:col-span-2 body-sm-regular text-blue1/[.62]">
                            {{ $product->pretty_size }}
                        </span>

                        <div class="sha-container justify-self-center md:justify-self-start text-center md:text-left col-span-12 md:col-span-2 relative">
                            <a class="link link-md-light sha" tabindex="0">
                                {{ $product->sha256_short }}
                            </a>
                            <div class="tooltip hidden text-neutral-light absolute break-words">
                                <div class="flex justify-between">
                                    <span class="body-md-semibold">
                                        SHA-256
                                    </span>
                                    <button class="close-button">
                                        @include('partials.icons', ['icon' => 'close-icon'])
                                    </button>
                                </div>
                                <p class="body-md-regular mt-[10px]" tabindex="0">
                                    {{ $product->sha256 }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-[16px] md:mt-[19px] mb-[16px] col-span-12 border-gray4 border-b-[2px]"></div>

                    @endforeach

                    <h4 class="h4-regular mt-[96px]">
                        Zip/Tarballs
                    </h4>
                    <span class="hidden md:block col-span-3 col-start-1 body-md-semibold">
                        OS
                    </span>

                    <span class="hidden md:block col-span-5 body-md-semibold">
                        Download
                    </span>

                    <span class="hidden md:block col-span-2 body-md-semibold">
                        Size
                    </span>

                    <span class="hidden md:block col-span-2 body-md-semibold">
                        SHA-256
                    </span>
                    <div class="mt-[16px] mb-[16px] col-span-12 border-neutral-dark border-b-[1px]"></div>
                    @foreach($archiveTableData as $index => $archive)
                        <span class="text-center md:text-left col-span-12 md:col-span-3 lg:col-start-1 body-md-semibold">
                            {{ $archive->platform->name }}
                        </span>

                        <a class="justify-self-center md:justify-self-start text-center md:text-left col-span-12 md:col-span-5 link-md-light" href="{{ $archive->url }}">
                            {{ $archive->basename }}
                            @include('partials.icons', ['icon' => 'download', 'class' => 'ml-[4px]'])
                        </a>

                        <span class="text-center md:text-left col-span-12 md:col-span-2 body-sm-regular text-blue1/[.62]">
                            {{ $archive->pretty_size }}
                        </span>

                        <div class="sha-container justify-self-center md:justify-self-start text-center md:text-left col-span-12 md:col-span-2 pointer-events-auto relative">
                            <a class="link-md-light sha" tabindex="0">
                                {{ $archive->sha256_short }}
                            </a>
                            <div class="tooltip hidden text-neutral-light absolute break-words">
                                <div class="flex justify-between">
                                    <span class="body-md-semibold">
                                        SHA-256
                                    </span>
                                    <button class="close-button">
                                        @include('partials.icons', ['icon' => 'close-icon'])
                                    </button>
                                </div>
                                <p class="body-md-regular mt-[10px]">
                                    {{ $archive->sha256 }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-[16px] mb-[16px] md:mt-[19px] col-span-12 border-gray4 border-b-[2px]"></div>
                    @endforeach

                    @if($includeSourceCodeSection)
                        <div class="col-span-12">
                            <h4 class="h4 mt-[96px]">
                                {{ $sourceCodeSectionTitle }}
                            </h4>
                            <div class="mt-[24px] link-p:link-light">
                                {!! $sourceCodeSectionDescription !!}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>