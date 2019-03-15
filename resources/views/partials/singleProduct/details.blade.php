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
                        <h3 class="mb-10">product info</h3>
                        <div class="mb-10">
                            {!!$product->description!!}
                        </div>

                        <div class="table-responsive">
                            <table class="pdtable">
                                <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <th>Model</th>
                                        <th>Color</th>
                                        <th>Dimensions</th>
                                        <th>Weight</th>
                                    </tr>
                                    @if(count($variantsForProduct) > 0 ) @foreach($variantsForProduct as $variant)

                                    <tr>
                                        <td data-th="Name">{{$variant->name}}</td>
                                        <td data-th="Model">{{$variant->model}}</td>
                                        <td data-th="Color">{{$variant->color}}</td>
                                        <td data-th="Dimensions">{{$variant->box_length}}L x {{$variant->box_width}}W x {{$variant->box_height}}H
                                        </td>
                                        <td data-th="Weight">{{$variant->shipping_weight}}</td>
                                    </tr>

                                    <tr>
                                        <td data-th="Name">{{$product->name}}</td>
                                        <td data-th="Model">{{$product->model}}</td>
                                        <td data-th="Color">{{$product->color}}</td>
                                        <td data-th="Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H
                                        </td>
                                        <td data-th="Weight">{{$product->shipping_weight}}</td>
                                    </tr>
                                    @endforeach @else

                                    <tr>
                                        <td data-th="Name">{{$product->name}}</td>
                                        <td data-th="Model">{{$product->model}}</td>
                                        <td data-th="Color">{{$product->color}}</td>
                                        <td data-th="Dimensions">{{$product->box_length}}L x {{$product->box_width}}W x {{$product->box_height}}H
                                        </td>
                                        <td data-th="Weight">{{$product->shipping_weight}}</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-10">
                            {{-- {{dd($product->instructions)}} --}}
                           {{--  {{dd("/storage/".json_decode($product->instructions)[0]->download_link)}} --}}
                            <p> Looking for product installation instructions? <span><a href="/storage/{{json_decode($product->instructions)[0]->download_link}}"> Click here to download</a></span>                                </p>
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