@extends('layouts.ui')



@section('xcss')
<link href="{{asset('css/skdslider.css')}}" rel="stylesheet">
<style>

.h-100 {
    height:100% !important;
}
.carousel-caption {
  font-size: 12px;
  font-style: italic;
  font-weight: bold;
 
}

.carousel-control {
  text-shadow: 0;
}

.carousel-control.left {
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0)),
    to(rgba(0, 0, 0, 00001))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0) 100%
  ) !important;
}

.carousel-control.right {
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0)),
    to(rgba(0, 0, 0, 00001))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0) 0,
    rgba(0, 0, 0, 0) 100%
  ) !important;
}

.carousel-indicators {
  bottom: -40px !important;
}

.carousel-indicators li {
  border: 1px solid #d9d9d9 !important;
  border-radius: 10px !important;
  background-color: #d9d9d9 !important;
  width: 11px !important;
  height: 11px !important;
  margin-left: 3px !important;
  margin-right: 3px !important;
}

.carousel-indicators .active {
  border: 0px solid #869791 !important;
  border-radius: 10px !important;
  background-color: #869791 !important;
  width: 11px !important;
  height: 11px !important;
  margin-bottom: 1px !important;
}

</style>
@endsection




@section('content')

@include('partials.homepage.sliderArea')

@include('partials.homepage.productsOnSale')

@include('partials.homepage.newProducts')


@endsection

@section('xjs')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script src="{{asset('js/skdslider.js')}}"></script>

@endsection