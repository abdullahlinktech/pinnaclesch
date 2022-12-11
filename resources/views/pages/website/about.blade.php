@extends('layouts.website', ['pageName' => 'about'])
@section('title', 'About Us')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>About us</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">About us</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
                <div class="column dt-sc-one-half first">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{--  <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li>  --}}
                        </ul>
                    </div>
                </div>

                <div class="column dt-sc-one-half">
                    <h2>{{ $content->f_title }}</h2>
                    <div class="justify">{!! $content->about !!}</div>
                </div>

                <div class="dt-sc-hr"></div>

                {{-- Founder Message --}}
                @foreach ($management as $chair)
                    <div class="dt-sc-one column" id="chairman-message">
                        <h2>Meet Our Founder</h2>
                        <div class="author-details">
                            <div class="author-thumb">
                                <img class="item-mask" src="{{ asset('website/images/author-hexa-bg.png') }}" alt="" title="">
                                <img src="{{ asset('uploads/management/'.$chair->image) }}" alt="" title="">
                            </div>
                            <div class="author-description">
                                <h5><a href="#">{{ $chair->name }}</a></h5>
                                <span class="author-role">{{ $chair->designation }}</span>
                            </div>
                            <div class="justify">{!! $chair->description !!}</div>
                        </div>
                    </div>
                @endforeach

                {{--  <div class="dt-sc-hr"></div>

                <div class="dt-sc-one-half column first">
                    <h2>Our Mission</h2>
                    <div class="author-description justify">
                        <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae
                            justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat
                            elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In
                            sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in,
                        </p>
                    </div>
                </div>

                <div class="dt-sc-one-half column">
                    <h2>Our Vission</h2>
                    <div class="author-description justify">
                        <p>Phasellus lorem augue, vulputate vel orci id, ultricies aliquet risus. Sed cursus ipsum vitae
                            justo scelerisque, ac viverra tellus eleifend. Etiam interdum justo nunc, ac volutpat erat
                            elementum id. Fusce dapibus mauris ac dictum porta. Sed pretium luctus elementum. In
                            sollicitudin felis semper purus imperdiet lobortis. In odio tellus, rhoncus eget dolor in,
                        </p>
                    </div>
                </div>  --}}

                {{--  <div class="dt-sc-hr"></div>
                <h2>Our Sponsors</h2>
                <div class="dt-sc-sponsor-carousel-wrapper">
                    <ul class="dt-sc-sponsor-carousel">
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo1.png') }}" alt=""
                                    title=""> </a> </li>
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo2.png') }}" alt=""
                                    title=""> </a> </li>
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo3.png') }}" alt=""
                                    title=""> </a> </li>
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo4.png') }}" alt=""
                                    title=""> </a> </li>
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo1.png') }}" alt=""
                                    title=""> </a> </li>
                        <li> <a href="#" title=""> <img src="{{ asset('website/images/client-logo2.png') }}" alt=""
                                    title=""> </a> </li>
                    </ul>
                    <div class="carousel-arrows">
                        <a class="sponsor-prev" href="#"> </a>
                        <a class="sponsor-next" href="#"> </a>
                    </div>
                </div>  --}}

            </section>
        </div>
    </div>
@endsection

@push('web-js')
    <script data-cfasync="false" src="{{ asset('../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.tabs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.isotope.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.carouFredSel-6.2.0-packed.js') }}"></script>
@endpush
