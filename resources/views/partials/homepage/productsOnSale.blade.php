{{-- New Products Banner Start --}}
<div class="new-products-banner pb-100">
       <div class="container">{{-- Section Title Start --}}
                <div class="col-xs-12 pb-100">
                    <div style="margin-top:75px;" class="section-title text-center mb-40">
                        <h3 class="section-info">On Sale</h3>
                    </div>
                </div>
                {{-- Section Title End --}}
             @foreach($productsOnSale as $product)
            <div class="row mb-100">

                

               
                {{-- Single Banner Start --}}
                <div class="col-sm-6">
                    <div class="single-banner">
                        <a href="{{route('single-product', $product->slug)}}"><img src="{{productImage($product->image)}}" alt="product-banner"></a>
                    </div>
                </div>
                {{-- Single Banner End --}}
                {{-- Single Banner Start --}}
                <div class="col-sm-6">
                    <div class="single-banner">
                        <div class="banner-description">
                            <h3>{{$product->name}}</h3>
                           
                        </div>
                    </div>
                </div>
                {{-- Single Banner End --}}
            </div>
            @endforeach
            
        </div>
    {{-- Container End --}}
</div>
{{-- New Products Banner End --}}