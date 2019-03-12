 {{-- Best Seller Products Start --}}
 <div class="best-seller-products pb-100">
        <div class="container">
            <div class="row">
                {{-- Section Title Start --}}
                <div class="col-xs-12">
                    <div style="margin-top:75px;" class="section-title text-center mb-40">
                        <h3 class="section-info">New Products</h3>
                    </div>
                </div>
                {{-- Section Title End --}}
            </div>
            {{-- Row End --}}
            <div class="row">
                <div class="col-sm-12">
                    {{-- Best Seller Product Activation Start --}}
                    <div class="best-seller new-products owl-carousel">
                        {{-- Single Product Start --}}

                        @foreach($newProducts as $product)
                        <div class="single-product">
                            {{-- Product Image Start --}}
                            <div class="pro-img">
                                <a href="{{route('single-product',$product->slug)}}">
                                    <img class="primary-img" src="{{productImage($product->image)}}" alt="single-product">
                                    @if($product->images) 
                                    @foreach( collect(json_decode($product->images))-> take(1) as $image) 
                                    <img class="secondary-img" src="{{productImage($image)}}" alt="single-product">
                                    @endforeach
                                    @endif

                                </a>
                               
                                <span class="sticker-new">new</span>
                            </div>
                            {{-- Product Image End --}}
                            {{-- Product Content Start --}}
                            <div class="pro-content text-center">
                                <h4><a href="{{route('single-product',$product->slug)}}">{{$product->name}}</a></h4>

                            </div>
                            {{-- Product Content End --}}
                        </div>
                        @endforeach
                        
                    </div>
                   
                </div>
            </div>
            {{-- Row End --}}
        </div>
        {{-- Container End --}}
    </div>
    {{-- Best Seller Products End --}}