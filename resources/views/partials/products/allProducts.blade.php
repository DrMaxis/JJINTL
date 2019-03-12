
        
        @section('search')
@include('inc.search')
        @endsection
        
        <!-- Categories Product Start -->
        <div class="all-categories pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Best Seller Product Start -->
                        <div class="best-seller">
                            
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="tab-content categorie-list ">
                                        
                                        
                                        <div id="grid-view" class="tab-pane fade in active mt-40">
                                            <div class="row"> 
                                                @foreach($products as $product)
                                                <div class="col-md-6 col-sm-6">
                                                    <!-- Single Blog Start -->
                                                    

                                                    <div class="single-blog">
                                                        <div class="blog-img">
                                                            <a href="{{route('single-product', $product->slug)}}"><img src="{{productImage($product->image)}}" alt="blog-image"></a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="blog-content-upper">
                                                                <h6 class="blog-title"><a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a></h6>
                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single Blog End -->
                                                </div>
                                                @endforeach
                                             
                                               
                                            </div>
                                            <!-- Row End -->
                                   
                                        </div>
                                        <!-- #Grid-view End -->
                                    </div>
                                    <!-- .Tab Content End -->
                                </div>
                            </div>
                            <!-- Row End -->
                        </div>
                        <!-- Best Seller Product End -->
                    </div>
                    <!-- Sidebar Content End -->
                 
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Categories Product End -->