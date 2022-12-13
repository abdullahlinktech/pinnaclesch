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
            <section id="primary" class="pt-5 pb-5">
                <div class="dt-sc-one column first">
                    {{--  Notice for Teacher  --}}
                    <h2 class="dt-sc-hr-green-title" id="teacher">Notice for Teacher</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            <div class="events-list">
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
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
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
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
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
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
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
                                <div class="event-details">
                                    <h2><a href="#">Multi Color Variation</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> 29 Jan 2014</div>
                                    <div class="event-excerpt">
                                        <p>Aenean lacinia sed diam eget risus varius ibendum nulla sed consectetur. Maecenas
                                            sed diam eget risus varius. <a href="">read more...</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="events-list">
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
        </div>
    </div>
@endsection
