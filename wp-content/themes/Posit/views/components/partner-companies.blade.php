
<section class="partner-companies section overflow-hidden">
   <div class="container space-between-sections">
       <div class="partner-companies-container grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 md:col-span-8 lg:col-span-7'
            ])
           <div class="companies col-span-12 mt-[40px] md:mt-[40px] lg:mt-[40px] hidden lg:block">
                <div class="companies-container flex my-[80px] md:my-[20px] lg:my-[40px] w-max">
                    @foreach($companies as $index => $company)
                        @php
                            $serialized = serializePost($company);
                        @endphp
                        @if(!empty($serialized))
                            <img tabindex="0" class="mr-[56px] lg:mr-[104px] max-w-[220px] w-full object-contain max-h-min" src="{{ $serialized['image'] }}" alt="{{ $serialized['imageAlt'] }}"/>
                        @endif
                    @endforeach
                </div>
           </div>
           <div class="col-span-12 mt-[40px] md:mt-[80px] lg:mt-[120px] block lg:hidden">
               <div id="marquee" class="marquee-component marquee flex my-[80px] md:my-[20px] lg:my-[40px]">
                   <div class="marquee-group">
                       @include('partials.marquee-group')
                   </div>
                   <div aria-hidden="true" class="marquee-group">
                       @include('partials.marquee-group')
                   </div>
               </div>
           </div>
       </div>
   </div>
</section>
