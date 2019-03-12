<!-- Product Thumbnail Start -->
<div class="main-product-thumbnail pb-100">
        <div class="container">
            <div class="row">




                <div class="col-sm-11">
                        <div class="main-img">
                                <img src="{{productImage($product->image)}}" class="active" alt="product-image" id="primaryImg" />
                            </div>
                            <div class="product-imgs mt-20">
            
            
                                <div class="product-finger chosen">
            
                                    <img src="{{productImage($product->image)}}" alt="product-image" />
                                </div>
                                @if(count($variantsForProduct) > 0 ) 


                                @foreach($variantsForProduct as $variant)
                                @if($variant->image) 
                               {{--  {{dd($variant->image)}} --}}
                               
                                <div class="product-finger">
            
                                        <img src="{{productImage($variant->image)}}" alt="product-image" />
                                    </div>
                                    
                                    @endif
                                    @endforeach
                                    
                                    
                                    @elseif ($product->images)
                                     @foreach(json_decode($product->images, true) as $image)
                                <div class="product-finger">
            
                                    <img src="{{productImage($image)}}" alt="product-image" />
                                </div>
                                    @endforeach
                                @endif
                               
                            
                                
                                
                               
                            </div>
                    </div>


                    
                </div>

            </div>
            <!-- Thumbnail Description End -->
        </div>
        <!-- Row End -->
  