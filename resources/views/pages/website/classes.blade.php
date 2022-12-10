@extends('layouts.website', ['pageName' => 'classes'])
@section('title', 'Classes')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Classes</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Classes</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
                <div class="column dt-sc-one-half first">
                    <div class="about-wrapper">
                        <ul class="about">
                            {{-- <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li> --}}
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li>
                        </ul>
                    </div>
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Class Play</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Nursery</h2>
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

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
                <div class="column dt-sc-one-half first">
                    <div class="about-wrapper">
                        <ul class="about">
                            {{-- <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li> --}}
                            <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>

                <div class="column dt-sc-one-half">
                    <h2>Class KG</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class One</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Two</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Three</h2>
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

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Four</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Five</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Six</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Seven</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Eight</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Nine</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Ten</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pb-5">
                <div class="column dt-sc-one-half first">
                    <h2>Class Eleven</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="column dt-sc-one-half">
                    <div class="about-wrapper">
                        <ul class="about">
                            <li> <img src="{{ asset('website/images/activity1.jpg') }}" alt="" title=""> </li>
                            {{-- <li> <img src="{{ asset('website/images/activity2.jpg') }}" alt="" title=""> </li>
                            <li> <img src="{{ asset('website/images/activity3.jpg') }}" alt="" title=""> </li> --}}
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5 pb-5">
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
                    <h2>Class Twelve</h2>
                    <p class="justify">{{ $content->s_description }}</p>
                </div>

                <div class="dt-sc-hr"></div>
                <div class="dt-sc-hr"></div>

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

