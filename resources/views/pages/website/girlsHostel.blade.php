@extends('layouts.website', ['pageName' => 'girlshostel'])
@section('title', 'Girls Hostel')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Girls Hostel</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Girls Hostel</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5">
                <div class="column dt-sc-one-half first">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Girls Hostel in Main Branch</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Girls Hostel in Chittagong Branch</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            {{-- <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li> --}}
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