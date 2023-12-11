<section>
   <div class="container space-between-sections">
       <div id="partner-companies-container" class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12 lg:col-span-5'
            ])
           <div class="col-span-12 lg:col-span-5 lg:col-start-8 mt-[120px] lg:mt-[80px] ">
               <div class="wysiwyg-content">
                   {!! $text !!}
               </div>
           </div>
       </div>
   </div>
</section>
