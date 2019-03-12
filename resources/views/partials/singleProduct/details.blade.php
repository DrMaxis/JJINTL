<!-- Product Thumbnail Description Start -->
<div class="thumnail-desc pb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="main-thumb-desc text-center list-inline">
                    <li class="active"><a data-toggle="tab" href="#detail">Details</a></li>
                    <li><a data-toggle="tab" href="#merchants">Where to Find</a></li>
                </ul>

                <div class="tab-content thumb-content">

                    <div id="merchants" class="tab-pane fade in pb-40">
                        <h3>Where To Get</h3>
                        <div class="table-responsive">
                            <table class="pmtable">
                                <tbody>
                                    <tr>
                                        <th>Merchant</th>
                                        <th>Availability</th>

                                    </tr>


                                

                                    

                                    @foreach($merchantsForProduct as $merchant)

                                    <tr>
                                        <td data-th="Merchant">

                                                <img class="merchant-logo" src="{{contentImage($merchant->icon)}}">



                                        </td>

                                    <td data-th="Availability"> <a href="{{getMerchantLink($merchant)}}" target="_blank">More Details
                                            
                                   </a></td>
                                          

                                    
                                    </tr>
                                   

                                
                                
@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div id="detail" class="tab-pane fade in active  pb-40">
                        <h3>information</h3>
                        <div class="table-responsive">
                            <table class="pdtable">
                                <tbody>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Model</th>
                                        <th>Product Desc.</th>
                                        <th>Product Dimensions</th>
                                        <th>Product Weight</th>
                                    </tr>
                                    @if(count($variantsForProduct) > 0 ) @foreach($variantsForProduct as $variant)

                                    <tr>
                                        <td data-th="Product Name">{{$variant->name}}</td>
                                        <td data-th="Product Model">{{$variant->model}}</td>
                                        <td data-th="Product Desc.">{{$variant->model}}</td>
                                        <td data-th="Product Dimensions">{{$variant->box_length}}L x {{$variant->box_width}}W x {{$variant->box_height}}H
                                        </td>
                                        <td data-th="Product Weight">{{$variant->shipping_weight}}</td>
                                    </tr>

                                    <tr>
                                        <td data-th="Product Name">{{$product->name}}</td>
                                        <td data-th="Product Model">{{$product->model}}</td>
                                        <td data-th="Product Desc.">{{$product->model}}</td>
                                        <td data-th="Product Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H
                                        </td>
                                        <td data-th="Product Weight">{{$product->shipping_weight}}</td>
                                    </tr>
                                    @endforeach @else

                                    <tr>
                                        <td data-th="Product Name">{{$product->name}}</td>
                                        <td data-th="Product Model">{{$product->model}}</td>
                                        <td data-th="Product Desc.">{{$product->model}}</td>
                                        <td data-th="Product Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H
                                        </td>
                                        <td data-th="Product Weight">{{$product->shipping_weight}}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- Product Thumbnail Tab Content Start -->




                <!-- Product Thumbnail Tab Content End -->
            </div>
        </div>
        <!-- Row End -->
    </div>
    <!-- Container End -->
</div>
<!-- Product Thumbnail Description End -->