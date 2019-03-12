   <!-- Page Breadcrumb Start -->
   <div class="main-breadcrumb mb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb-content text-center ptb-70" style="background: rgba(0,0,0,0) url({{contentImage($product->banner_image)}}) no-repeat scroll center center / cover">
                        <h1>{{$product->name}}</h1>
                        <ul class="breadcrumb-list breadcrumb">
                            <li><a href="{{route('homepage')}}">home</a></li>
                            <li><a href="{{route('single-product', $product->slug)}}">product details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Breadcrumb End -->