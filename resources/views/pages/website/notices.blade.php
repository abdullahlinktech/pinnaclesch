@extends('layouts.website', ['pageName' => 'notices'])
@section('title', 'Notices')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Notices</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Notices</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5 pb-5">
                <div class="dt-sc-one column first">
                    {{--  Notice for Teacher  --}}
                    <h2 class="dt-sc-hr-green-title" id="teacher">Notice for Teacher</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image8.jpg') }}" class=""
                                            alt="" title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Maecenas sed diam eget risus varius varius</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 27 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image9.jpg') }}"class=""alt=""
                                            title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Aenean lacinia sed diam eget risus varius ibendum</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 28 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title=""><img
                                            src="{{ asset('website/images/image10.jpg') }}" class=""
                                            alt="" title=""></a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Notice for Student  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="student">Notice for Student</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image8.jpg') }}" class=""
                                            alt="" title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Maecenas sed diam eget risus varius varius</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 27 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image9.jpg') }}"class=""alt=""
                                            title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Aenean lacinia sed diam eget risus varius ibendum</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 28 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title=""><img
                                            src="{{ asset('website/images/image10.jpg') }}" class=""
                                            alt="" title=""></a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Notice for Gaurdian  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="gaurdian">Notice for Gaurdian</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image8.jpg') }}" class=""
                                            alt="" title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Maecenas sed diam eget risus varius varius</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 27 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image9.jpg') }}"class=""alt=""
                                            title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Aenean lacinia sed diam eget risus varius ibendum</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 28 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title=""><img
                                            src="{{ asset('website/images/image10.jpg') }}" class=""
                                            alt="" title=""></a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--  Notice for Career  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="career">Notice for Job</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image8.jpg') }}" class=""
                                            alt="" title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Maecenas sed diam eget risus varius varius</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 27 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title="">
                                        <img src="{{ asset('website/images/image9.jpg') }}"class=""alt=""
                                            title="">
                                    </a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Aenean lacinia sed diam eget risus varius ibendum</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 28 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-thumb">
                                    <a href="#" title=""><img
                                            src="{{ asset('website/images/image10.jpg') }}" class=""
                                            alt="" title=""></a>
                                </div>
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="secondary">
                <aside class="widget widget_categories">
                    <h3 class="widgettitle">Notice for Others</h3>
                    <ul>
                        <li><a href="{{ route('notices') }}/#teacher">Notice for Teacher<span>(16)</span></a></li>
                        <li><a href="{{ route('notices') }}/#student">Notice for Student<span>(3)</span></a></li>
                        <li><a href="{{ route('notices') }}/#guardian">Notice for Guardian<span>(26)</span></a></li>
                        <li><a href="{{ route('notices') }}/#career">Notice for Job<span>(18)</span></a></li>
                    </ul>
                </aside>
                <aside class="widget widget_text">
                    <h3 class="widgettitle">Kids Achievements</h3>
                    <p>In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique <a href="#"
                            class="highlighter">senectus</a> et netus et malesuada fames ac turpis egestas. </p>
                    <p>Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi
                        sagittis. Integer enim odio.</p>
                </aside>

                <aside class="widget widget_text">
                    <h3 class="widgettitle">Visual Guidance</h3>
                    <p>Our methods of teaching and level of quality instructors all add up to a well-rounded experience.</p>
                    <iframe src="https://player.vimeo.com/video/21195297" width="420" height="200"></iframe>
                </aside>
            </section>
        </div>
    </div>
@endsection
