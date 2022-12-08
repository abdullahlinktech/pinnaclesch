@extends('layouts.website', ['pageName' => 'transportbus'])
@section('title', 'Transport Bus')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Haice</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Bus</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Haice for Students</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>
                <div class="column dt-sc-one-half">
                    <div class="about-slider-wrapper">
                        <ul class="about-slider">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li>
                        </ul>
                    </div>
                </div>
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
