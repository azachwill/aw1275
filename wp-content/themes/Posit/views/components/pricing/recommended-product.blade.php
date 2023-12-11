@php
    $product = serializePost($product);
@endphp

<section>
   <div class="container space-between-sections">
       <div class="grid grid-cols-12">
            @include('partials.header', [
                'data' => $header,
                'containerClasses' => 'col-span-12'
            ])
       </div>
    
       <div class="grid grid-cols-12">
           <div class="col-span-12 md:col-span-10 md:col-start-3 lg:col-span-5 lg:col-start-8">
               <div class="mt-[64px] md:mt-[80px] lg:mt-0">
                   <div class="badge">
                       recommended
                   </div>
                   <div class="mt-[16px]">
                       <img class="w-full object-cover" src="{{ $product['image'] }}" alt="{{ $product['imageAlt'] }}">
                   </div>
                   <div class="wysiwyg-content">
                       {!! $benefits !!}
                   </div>
                   <div class="flex mt-[40px]">
                       <a class="btn-md-primary" href="{{ $product['url'] }}" role="link">
                           See product details
                       </a>
                   </div>
                   <div>
                   
                   </div>
                   @if($contact)
                       <div class="mt-[24px]">
                           @include('partials.links.link', [
                               'data' => $contact
                           ])
                       </div>
                   @endif
               </div>
           </div>
       </div>
   </div>
</section>