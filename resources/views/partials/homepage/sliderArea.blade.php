  {{--Slider Area Start --}}
  <div class="slider-area pb-100">
        {{--Main Slider Area Start --}}
        <div class="slider-wrapper theme-default">
            {{--Slider Background  Image Start--}}
          {{--   <div id="slider" class="skdslider">
                <ul>
                    <li>
                         @foreach($products as $product) 


                <img src="{{productImage($product->image)}}" data-thumb="{{productImage($product->image)}}" alt="" title="#htmlcaption{{$product->id}}" />
               
            <div  class="slide-desc">
                <h2>{{$product->name}}</h2>
                    <p  >{{$product->details}}</p>
                
              
            </div>
            @endforeach
                    </li>
                </ul>
              
            </div> --}}




            <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
                    <!-- Indicators -->

                    
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                  
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        @foreach($products -> take (1) as $mainProduct) 



                      <div class="item active">
                        <img class="h-100" src="{{productImage($mainProduct->image)}}" width="100%">
                        <div class="carousel-caption">
                          <h3>{{$mainProduct->name}}</h3>
                          <p>{{$mainProduct->details}}<br></p>
                        </div>
                      </div>
                    @endforeach

                    @foreach($products as $product)
                    @if($product->slug ==
                    $mainProduct->slug)

                    @else 

                    <div class="item">
                            <img class="h-100" src="{{productImage($product->image)}}" width="100%">
                            <div class="carousel-caption">
                              <h3>{{$product->name}}</h3>
                              <p>{{$product->details}}<br></p>
                            </div>
                          </div>
                          
                          @endif
                          @endforeach
                    </div>
                  
                    <!-- Controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                  
            {{--Slider Background  Image Start--}}
            {{--Slider htmlcaption Start--}}
           

            {{--Slider htmlcaption End --}}
        </div>
        {{--Main Slider Area End --}}
    </div>
    {{--Slider Area End --}}