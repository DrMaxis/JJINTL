



        <!-- Slider Area Start -->
        <div class="slider-area pb-100">
          <!-- Main Slider Area Start -->
          <div class="slider-wrapper theme-default">
              <!-- Slider Background  Image Start-->
              <div id="slider" class="nivoSlider">
                @foreach ($products as $product)
                   <img src="{{productImage($product->image)}}" data-thumb="{{productImage($product->image)}}" alt="" title="#htmlcaption{{$product->id}}" /> 
                @endforeach
                  
                 
              </div>
              <!-- Slider Background  Image Start-->
              <!-- Slider htmlcaption Start-->

              @foreach($products as $product)
              <div id="htmlcaption{{$product->id}}" class="nivo-html-caption slider-caption">
                  <!-- Slider Text Start -->
                  <div class="slider-text">
                      <h2 class="wow fadeInLeft" data-wow-delay="1s"> {{$product->name}}</h2>
                      <p class="wow fadeInRight" data-wow-delay="1s">{{$product->details}}</p>

                  </div>
                  <!-- Slider Text End -->
              </div>
              @endforeach
              <!-- Slider htmlcaption End -->
            
          </div>
          <!-- Main Slider Area End -->
      </div>
      <!-- Slider Area End -->