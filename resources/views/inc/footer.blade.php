{{-- Footer Start --}}
<footer>
    {{-- Footer Middle Start --}}
    <div class="footer-middle">
        <div class="container">
            <div class="container-footer">
                <div class="row">
                    {{-- Single Footer Start --}}
                    <div class="single-footer col-md-11 col-sm-11 text-center">
                        <div class="footer-logo">
                            <a href="{{route('about-us')}}"><img class="img" src="{{asset('assets/imgs/logos/logo.png')}}" alt="logo-img"></a>
                        </div>
                        <div class="footer-content">
                            <p>About JJ International, Inc</p>
                            <h5 class="contact-info mtb-10">contact info:</h5>
                            <ul class="footer-list first-content">
                                <li><span>
                                         {{env('BUISNESS_ADDRESS')}}
                                        </span>
                                    <i class="pe-7s-map-marker"></i>
                                    
                                    {{env('BUISNESS_CITY')}},{{env('BUISNESS_STATE')}}
                                    {{env('BUISNESS_ZIP')}}

                                </li>
                                <li><i class="pe-7s-mail"></i>{{env('BUSINESS_ADMINEMAIL')}}</li>
                                <li><i class="pe-7s-call"></i>{{env('BUSINESS_ADMINPHONE')}}</li>
                            </ul>
                        </div>
                    </div>

                </div>
                {{-- Row End --}}
            </div>
            {{-- Container Footer End --}}
        </div>
        {{-- Container End --}}
    </div>
    {{-- Footer Middle End --}} {{-- Footer Bottom Start --}}
    <div class="footer-bottom">
        <div class="container">
            <div class="container-footer ptb-30">
                <div class="row">
                    <div class="col-sm-7">
                    <p class="text-left copyright-text">Copyright © <a href="{{route('about-us')}}">JJ
                                    International</a> All Rights Reserved.</p>
                    </div>
                    <div class="col-sm-5">
                        <div class="socila-footer">
                                {{menu('foot-social', 'partials.menus.foot-social')}}
                            
                        </div>
                    </div>
                </div>
                {{-- Row End --}}
            </div>
            {{-- Container Footer End --}}
        </div>
        {{-- Container End --}}
    </div>
    {{-- Footer Bottom End --}}
</footer>
{{-- Footer End --}} 