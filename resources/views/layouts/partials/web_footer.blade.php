<footer>
    <div class="footer-widgets-wrapper">
        <div class="container">
            <div class="column dt-sc-one-fourth first">
                <aside class="widget widget_text">
                    <h3 class="widgettitle red_sketch"> About Pinnacle </h3>
                    <div class="schshortDes">{!! $content->s_description !!}</div>
                </aside>
            </div>
            <div class="column dt-sc-one-fourth">
                <aside class="widget widget_recent_entries">
                    <h3 class="widgettitle green_sketch"> Sister Concerns </h3>
                    <ul class="dt-sc-fancy-list blue graduation-cap sisConcers">
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                        <li> <a href="#">Pinnacle Chartered School & College</a></li>
                    </ul>
                </aside>
            </div>

            <div class="column dt-sc-one-fourth">
                <aside class="widget widget_recent_entries">
                    <h3 class="widgettitle yellow_sketch"> Social Links </h3>

                    <div class="dt-sc-one-half column first">
                        <a href="{{ $content->facebook }}" target="_blank" title=""> <img src="{{ asset('website/images/socialicons/facebook.png') }}" alt="" title=""> </a>
                    </div>
                    <div class="dt-sc-one-half column">
                        <a href="{{ $content->youtube }}" target="_blank" title=""> <img src="{{ asset('website/images/socialicons/youtube.png') }}" alt="" title=""> </a>
                    </div>

                    <div class="dt-sc-one-half column first">
                        <a href="{{ $content->linkedin }}" target="_blank" title=""> <img src="{{ asset('website/images/socialicons/linkedin.png') }}" alt="" title=""> </a>
                    </div>
                    <div class="dt-sc-one-half column">
                        <a href="{{ $content->twitter }}" target="_blank" title=""> <img src="{{ asset('website/images/socialicons/twitter.png') }}" alt="" title=""> </a>
                    </div>

                    <div class="schoolmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4648.600182914742!2d91.83138767439436!3d22.368901337114714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd881aae5c833%3A0x4d73624e351662b3!2sPinnacle%20Chartered%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1670306778710!5m2!1sen!2sbd" width="100%" height="190" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </aside>
            </div>

            <div class="column dt-sc-one-fourth">
                <aside class="widget widget_text">
                    <h3 class="widgettitle steelblue_sketch">Contact with Us</h3>
                    <div class="textwidget">
                        <p class="dt-sc-contact-info"><span class="fa fa-map-marker"></span> {{ $content->address }} </p>
                        <p class="dt-sc-contact-info"><span class="fa fa-phone"></span> {{ $content->phone }} </p>
                        <p class="dt-sc-contact-info"><span class="fa fa-envelope"></span><a href="mailto:{{ $content->email }}"> {{ $content->email }}</a></p>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <p class="copyright-info center">© {{ date('Y')}} {{ $content->name }}. All rights reserved. Develop by: <a href="https://linktechbd.com/" target="_blank" title=""> Link-Up Technology Ltd.</a></p>
            {{--  <div class="footer-links">
                <p>Follow us</p>
                <ul class="dt-sc-social-icons">
                    <li class="facebook"><a href="{{ $content->facebook }}"><img src="{{ asset('website/images/facebook.png') }}" title="Facebook"></a></li>
                    <li class="youtube"><a href="{{ $content->youtube }}"><img src="{{ asset('website/images/youtube.png') }}" title="Youtube"></a></li>
                    <li class="twitter"><a href="{{ $content->twitter }}"><img src="{{ asset('website/images/twitter.png') }}" title="Twitter"></a></li>
                    <li class="linkedin"><a href="{{ $content->linkedin }}"><img src="{{ asset('website/images/linkedin.png') }}" title="Linkedin"></a></li>
                </ul>
            </div>  --}}
        </div>
    </div>
</footer>
