

<!--
      _     _   ___ _   _ _____ _____ ____  _   _    _  _____ ___ ___  _   _    _    _     
     | |   | | |_ _| \ | |_   _| ____|  _ \| \ | |  / \|_   _|_ _/ _ \| \ | |  / \  | |    
  _  | |_  | |  | ||  \| | | | |  _| | |_) |  \| | / _ \ | |  | | | | |  \| | / _ \ | |    
 | |_| | |_| |  | || |\  | | | | |___|  _ <| |\  |/ ___ \| |  | | |_| | |\  |/ ___ \| |___ 
  \___/ \___/  |___|_| \_| |_| |_____|_| \_\_| \_/_/   \_\_| |___\___/|_| \_/_/   \_\_____|
                                                                                                        
  
        
                                      @StudioUnwanted 2018                                                                                         
-->

<html class="no-js" lang="{{ app()->getLocale() }}">
    @include('inc.head')
     @yield('xcss')

<body>
    <div class="wrapper home-3">
    @include('inc.preloader')

    

    @include('inc.header')
    
@yield('content')
@include('inc.notifications')


  @include('inc.footer')
</div>
 @yield('xjs')
 <!-- Wrapper End -->
    <!-- jquery 3.12.4 -->
    <script src="{{asset('js/dependantJs.js')}}"></script>
    <!-- mobile menu js  -->
    <script src="{{asset('js/jquery.meanmenu.min.js')}}"></script>
    <!-- scroll-up js -->
    <script src="{{asset('js/jquery.scrollUp.js')}}"></script>
    <!-- owl-carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('js/wow.min.js')}}"></script>
    <!-- price slider js -->
    <script src="{{asset('js/jquery-ui.min.j')}}s"></script>
    <!-- elevateZoom js -->
    <script src="{{asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <!-- nivo slider js -->
    <script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- plugins -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('js/app.js')}}"></script>

   
</body>

</html>