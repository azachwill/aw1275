<section>
    <div class="container space-between-sections">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-5">
                <div>
                    {!! $description !!}
                </div>
            </div>
            
            <div id="price-calculator" class="col-span-12 md:col-start-3 md:col-span-10 lg:col-span-5 lg:col-start-8 mt-[60px] md:mt-[120px] lg:mt-0">
                <div class="bg-blue1 rounded-[8px] px-[32px] md:px-[48px] py-[40px] md:py-[60px]">
                    <div>
                        <p class="ui-medium text-neutral-light/60 uppercase">
                            Estimated Cost
                        </p>
                        <h2 class="pricing-result h3 text-neutral-light">
                            {{-- Pricing calcs result - Filled dynamically with JS --}}
                        </h2>
                        <p class="body-sm-regular text-neutral-light mt-[16px]">
                            Annually
                        </p>
                        <p class="pricing-message body-sm-regular text-neutral-light/60">
                            {{-- Validation message - Filled dynamically with JS --}}
                        </p>
                    </div>
                    <div class="mt-[24px]">
                        <label class="label-on-dark" for="developers">
                            Number of developers
                            <input type="number" name="rsp-users" class="input-on-dark pricing-input" type="number" placeholder="5" value="5" min="5">
                        </label>
    
                        <label class="label-on-dark mt-[16px]" for="consumers">
                            Number of consumers
                            <input type="number" name="rsc-users" class="input-on-dark pricing-input" type="number" placeholder="20" value="20" min="20">
                        </label>
                    </div>
                    <div class="flex mt-[32px]">
                        @include('partials.cta', [
                            'data' => $cta,
                            'additional_classes' => 'w-full'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
