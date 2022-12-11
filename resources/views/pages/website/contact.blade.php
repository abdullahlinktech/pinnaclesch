@extends('layouts.website', ['pageName' => 'contact'])
@section('title', 'Contact Us')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Contact Us</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Contact Us</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5">
                <div class="column dt-sc-three-fourth first
                contact_form_outer">
                    <form name="frcontact" class="contact-form" method="post" action="{{route('store.message')}}">
                        @csrf
                        <h2>We had Like to Hear From You!</h2>
                        <p class="column dt-sc-one-third first">
                            <input id="name" name="name" type="text" placeholder="Name" required="">
                        </p>
                        <p class="column dt-sc-one-third">
                            <input id="email" name="email" type="email" placeholder="Email ID" required="">
                        </p>
                        <p class="column dt-sc-one-third">
                            <input id="subject" name="subject" type="text" placeholder="Subject" required="">
                        </p>
                        <p>
                            <textarea id="comment" name="message" placeholder="Message"></textarea>
                        </p>
                        <div id="ajax_contact_msg"> </div>
                        <p>
                            <input name="submit" type="submit" class="dt-sc-button medium"
                                value="Send Email">
                        </p>
                    </form>
                </div>

                <div class="column dt-sc-one-fourth class_hours">
                    <h2>Get In Tuch</h2>
                    <ul class="class_hours">
                        <li>Address<span>{{ $content->address }}</span></li>
                        <li>Phone<span>{{ $content->phone }}</span></li>
                        <li>Email<span>{{ $content->email }}</span></li>
                        {{-- <li>Thursday<span>9am - 3pm</span></li>
                        <li>Friday<span>9am - 3pm</span></li>
                        <li>Saturday<span>Holiday</span></li>
                        <li>Sunday<span>Holiday</span></li> --}}
                    </ul>
                    <div class="dt-sc-hr-small"></div>
                    <p><strong><span class="highlighter">We care</span>
                            about your dearest</strong></p>
                    <ul class="dt-sc-social-icons">
                        <li class="facebook"><a href="#" title="Facebook" class="dt-sc-tooltip-bottom"><img
                                    src="{{ asset('website/images/facebook.png') }}" alt="" title=""></a></li>
                        <li class="twitter"><a href="#" title="Twitter" class="dt-sc-tooltip-bottom"><img
                                    src="{{ asset('website/images/twitter.png') }}" alt="" title=""></a></li>
                        <li class="gplus"><a href="#" title="Google
                            Plus"
                                class="dt-sc-tooltip-bottom"><img src="{{ asset('website/images/gplus.png') }}" alt="" title=""></a>
                        </li>
                        <li class="pinterest"><a href="#" title="Pinterest" class="dt-sc-tooltip-bottom"><img
                                    src="{{ asset('website/images/pinterest.png') }}" alt="" title=""></a></li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="dt-sc-hr"> </div>
        <div class="dt-sc-hr"> </div>
        <div class="container-fluid">
            <div class="schoolmap">
                <iframe src="{{$content->mapp}}" width="100%" height="400" style="border:0;"></iframe>
            </div>
        </div>
    </div>
@endsection
