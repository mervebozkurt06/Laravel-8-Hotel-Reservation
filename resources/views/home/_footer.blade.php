@php
    $setting = \App\Http\Controllers\HomeController::getSetting();
@endphp
<!--footer starts from here-->
<footer class="footer">
    <div class="container bottom_border">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                <!--headin5_amrc-->
                <p class="mb10">{{$setting->address}}</p>
                <p><i class="fa fa-location-arrow"></i> {{$setting->location}} </p>
                <p><i class="fa fa-phone"></i> {{$setting->phone}} </p>
                <p><i class="fa fa fa-envelope"></i> {{$setting->email}} </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col">
                <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                <!--headin5_amrc ends here-->
                <ul class="footer_ul2_amrc">
                    <li>
                        <a href="#"><i class="fab fa-facebook fleft padding-right"></i> </a>
                        <p>Facebook...<a href="#">{{$setting->facebook}}</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram fleft padding-right"></i> </a>
                        <p>Instagram...<a href="#">{{$setting->instagram}}</a></p>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                        <p>Twitter...<a href="#">{{$setting->twitter}}</a></p>
                    </li>
                </ul>
                <!--footer_ul2_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li><a href="#">Default Version</a></li>
                    <li><a href="#">Boxed Version</a></li>
                    <li><a href="#">Our Team </a></li>
                    <li><a href="{{route('aboutus')}}">About Us</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Get In Touch</a></li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 ">
                <h5 class="headin5_amrc col_white_amrc pt2">Recent posts</h5>
                <!--headin5_amrc-->
                <ul class="footer_ul_amrc">
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="{{asset('assets')}}/images/post-img-01.jpg" alt="" />
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>22 Sep 2018</span>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="{{asset('assets')}}/images/post-img-02.jpg" alt="" />
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>34 Sep 2018</span>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left">
                            <img class="img-fluid" src="{{asset('assets')}}/images/post-img-03.jpg" alt="" />
                        </div>
                        <div class="media-body">
                            <p>How to find best dog food?</p>
                            <span>30 Sep 2018</span>
                        </div>
                    </li>
                </ul>
                <!--footer_ul_amrc ends here-->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="footer-logo">
            <a href="{{route('home')}}"><img src="{{asset('assets')}}/images/footer-logo.png" alt="" /></a>
        </div>
        <!--foote_bottom_ul_amrc ends here-->
        <p class="copyright text-center">All Rights Reserved| {{$setting->company}}

        </p>
        <ul class="social_footer_ul">
            @if($setting->facebook != null)<li><a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>@endif
            @if($setting->twitter != null)<li><a href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>@endif
            @if($setting->youtube != null)<li><a href="{{$setting->youtube}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>@endif
            @if($setting->instagram != null)<li><a href="{{$setting->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a></li>@endif
        </ul>
        <!--social_footer_ul ends here-->
    </div>
</footer>
