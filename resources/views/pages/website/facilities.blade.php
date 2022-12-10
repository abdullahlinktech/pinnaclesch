@extends('layouts.website', ['pageName' => 'facilities'])
@section('title', 'Facilities')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Facilities</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Facilities</span>
                </div>
            </div>
        </div>

        {{--  Boy's Hostel  --}}
        <div class="container" id="boyshostel">
            <h2 class="dt-sc-hr-green-title pt-5">{{ "Boy's Hostel" }}</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Boys Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>
            </section>
        </div>

        {{--  Girl's Hostel  --}}
        <div class="container" id="girlshostel">
            <h2 class="dt-sc-hr-green-title pt-5">{{ "Girl's Hostel" }}</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>
            </section>
        </div>

        {{--  Transport - Haice  --}}
        <div class="container" id="transport-haice">
            <h2 class="dt-sc-hr-green-title pt-5">Transport - Haice</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Boys Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>
            </section>
        </div>

        {{--  Transport - Bus  --}}
        <div class="container" id="transport-bus">
            <h2 class="dt-sc-hr-green-title pt-5">Transport - Bus</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>
            </section>
        </div>

        {{--  Computer Lab  --}}
        <div class="container" id="computer-lab">
            <h2 class="dt-sc-hr-green-title pt-5">Computer Lab</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>
            </section>
        </div>

        {{-- Science Lab --}}
        <div class="container" id="science-lab">
            <h2 class="dt-sc-hr-green-title pt-5">Science Lab</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>
            </section>
        </div>

        {{-- Chemistry Lab --}}
        <div class="container" id="chemistry-lab">
            <h2 class="dt-sc-hr-green-title pt-5">Chemistry Lab</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>
            </section>
        </div>

        {{-- Biology Lab --}}
        <div class="container" id="biology-lab">
            <h2 class="dt-sc-hr-green-title pt-5">Biology Lab</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>
            </section>
        </div>

        {{-- Health Service --}}
        <div class="container" id="health-service">
            <h2 class="dt-sc-hr-green-title pt-5">Health Service</h2>
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title="">
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Girls Hostel No 1 in Campus-1</h2>
                    <p class="justify">{{ $content->s_description }}</p>
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
