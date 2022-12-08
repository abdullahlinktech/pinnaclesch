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
                    <form name="frcontact" class="contact-form" method="post"
                        action="https://wedesignthemes.com/html/kidslife/php/contactmail.php">
                        <h2>We had Like to Hear From You!</h2>
                        <p class="column dt-sc-one-third first">
                            <input id="name" name="txtname" type="text" placeholder="Name" required="">
                        </p>
                        <p class="column dt-sc-one-third">
                            <input id="email" name="txtemail" type="email" placeholder="Email ID" required="">
                        </p>
                        <p class="column dt-sc-one-third">
                            <input id="subject" name="txtsubject" type="text" placeholder="Subject" required="">
                        </p>
                        <p>
                            <textarea id="comment" name="txtmessage" placeholder="Message"></textarea>
                        </p>
                        <div id="ajax_contact_msg"> </div>
                        <p>
                            <input name="submit" type="submit" id="submit" class="dt-sc-button medium"
                                value="Send Email">
                        </p>
                    </form>
                </div>

                <div class="column dt-sc-one-fourth class_hours">
                    <h2>Class Hours</h2>
                    <ul class="class_hours">
                        <li>Monday<span>9am - 3pm</span></li>
                        <li>Tuesday<span>9am - 3pm</span></li>
                        <li>Wednesday<span>9am - 3pm</span></li>
                        <li>Thursday<span>9am - 3pm</span></li>
                        <li>Friday<span>9am - 3pm</span></li>
                        <li>Saturday<span>Holiday</span></li>
                        <li>Sunday<span>Holiday</span></li>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4648.600182914742!2d91.83138767439436!3d22.368901337114714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd881aae5c833%3A0x4d73624e351662b3!2sPinnacle%20Chartered%20School%20%26%20College!5e0!3m2!1sen!2sbd!4v1670306778710!5m2!1sen!2sbd" width="100%" height="400" style="border:0;"></iframe>
            </div>
        </div>
    </div>
@endsection
