@extends('layouts.website', ['pageName' => 'video'])
@section('title', 'Video Gallery')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>News & Events</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">News & Events</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5">
                <div class="column dt-sc-one-third first">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third first">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third first">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third first">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="column dt-sc-one-third">
                    <iframe class="entry-thumb" width="100%" height="170" src="https://www.youtube.com/embed/qM9cqXCJ9N4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </section>


            <section id="secondary">
                <aside class="widget widget_categories">
                    <h3 class="widgettitle">Categories</h3>
                    <ul>
                        <li>
                            <a href="#">Play School<span>(16)</span></a>
                        </li>
                        <li>
                            <a href="#">Academic Performance<span>(3)</span></a>
                        </li>
                        <li>
                            <a href="#">Co-curricular<span>(26)</span></a>
                        </li>
                        <li>
                            <a href="#">Visual Education<span>(18)</span></a>
                        </li>
                        <li>
                            <a href="#">Inter Competition<span>(4)</span></a>
                        </li>
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
