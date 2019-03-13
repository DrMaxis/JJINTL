{{-- 
        <!-- Slider Area Start -->
        <div class="slider-area pb-100">
            <!-- Main Slider Area Start -->
            <div class="slider-wrapper theme-default">
                <!-- Slider Background  Image Start-->
                <div id="slider" class="nivoSlider">
                  @foreach ($products  as $product)
                     <img src="{{productImage($product->image)}}" data-thumb="{{productImage($product->image)}}" title="#htmlcaption{{$product->id}}" /> 
                  @endforeach
                    
                </div>
                <!-- Slider Background  Image Start-->
                <!-- Slider htmlcaption Start-->
                @foreach ($products as $product)
                   <div id="htmlcaption{{$product->id}}" class="nivo-html-caption slider-caption">
                    <!-- Slider Text Start -->
                    <div class="slider-text">
                        <h3 class="wow fadeInLeft" data-wow-delay="1s"> {{$product->name}}</h3>
                        <p class="wow fadeInRight" data-wow-delay="1s">{{$product->details}}</p>

                    </div>
                    <!-- Slider Text End -->
                </div>
                <!-- Slider htmlcaption End -->  
                @endforeach
               
              
            </div>
            <!-- Main Slider Area End -->
        </div>
        <!-- Slider Area End --> --}}


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
                                <img  style="max-height:600px;" class="h-100" src="{{productImage($mainProduct->image)}}" width="100%">
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
                                    <img style="max-height:600px;" class="h-100" src="{{productImage($product->image)}}" width="100%">
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
                           
          
          {{-- 
                           <div id="container">
                             @foreach($products -> take(1) as $mainProduct) 
          
          
                            <div class="content active" data-slide="1" data-bg="{{productImage($mainProduct->image)}}">
                              <div class="info-logo"><i class="material-icons">style</i></div>
                              <div class="info-wrapper">
                                <h3 class="slidetitle">{{$mainProduct->name}}</h3>
                                <p>{{$mainProduct->details}}</p>
                              </div>
                              <div class="bottom-divider"></div>
                            </div>
                            @endforeach
                            @foreach($products as $product)
                            @if($product->slug ==
                            $mainProduct->slug)
          
                            @else 
                            <div class="content " data-slide="1" data-bg="{{productImage($product->image)}}">
                                <div class="info-logo"><i class="material-icons">style</i></div>
                                <div class="info-wrapper">
                                  <h3 class="slidetitle">{{$product->name}}</h3>
                                  <p>{{$product->details}}</p>
                                </div>
                                <div class="bottom-divider"></div>
                              </div>
                              @endif
                              @endforeach
                            <div class="playbutton">
                              <!--i.fa.fa-play.fa-2x.fa-stack-2x-->
                              <!--i.fa.fa-pause.fa-2x.fa-stack-x--><i class="material-icons play">play_arrow</i><i class="material-icons pause">pause</i>
                            </div>
                            <div class="slide-left"><i class="material-icons">chevron_left</i></div>
                            <div class="slide-right"><i class="material-icons">chevron_right</i></div>
                          </div> --}}
          
          
          
          
          
          
          {{-- <div class="owl-carousel">
            @foreach($products as $product)
              <div class="item">
                <a href="{{route('single-product', $product->slug)}}">
                <img src="{{productImage($product->image)}}" alt="" />
                <div class="inner">
                  <a href="{{route('single-product', $product->slug)}}">{{$product->name}}</a>
                </div>
                </a>
            </div>
                @endforeach
          </div> --}}
                    {{--Slider Background  Image Start--}}
                    {{--Slider htmlcaption Start--}}
                   
          
                    {{--Slider htmlcaption End --}}
                </div>
                {{--Main Slider Area End --}}
            </div>
            {{--Slider Area End --}}