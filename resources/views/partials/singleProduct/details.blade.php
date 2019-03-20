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
                                        <th>Set Piece</th>
                                        <th>Dimensions</th>
                                        
                                    </tr>
                                    @if(count($productPieces) > 0 )
                                     @foreach($productPieces as $piece)

                                    <tr>
                                        <td data-th="Set Piece">{{$piece->name}}</td>
                                        <td data-th="Dimensions">{{$piece->length}}L x {{$piece->width}}W x {{$piece->height}}H
                                        </td>
                                        
                                    </tr>
                                    @endforeach 
                                    
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="mb-10">
                            <p> Looking for product installation instructions? @if(empty($product->instructions) || productInstructions($product->instructions)
                                == false )

                                <span>
                                 <a> Instuctions will be uploaded soon.</a>
                                </span> @else
                                <span>
                                <a href="{{productInstructions($product->instructions)}}"> Click here to download</a>
                            </span> @endif
                            </p>
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