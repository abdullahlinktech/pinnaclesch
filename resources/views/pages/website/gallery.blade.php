@extends('layouts.website', ['pageName' => 'gallery'])
@section('title', 'Photo Gallery')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Photo Gallery</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Photo Gallery</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5">
                <div class="dt-sc-portfolio-container">
                    <div class="portfolio dt-sc-one-third column first music">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon1.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon1.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Arts &amp; Craft </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all music">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon2.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon2.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Summer Fun </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all arts fun listen">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon3.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon3.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Swim Lesson </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column first all music">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon4.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon4.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Fly with me </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all fun music listen">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon5.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon5.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Active Learning </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all innovation listen">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon6.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon6.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Our Approach </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all listen">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon7.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon7.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Our School </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third first column all fun">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon8.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon8.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Karate Kid </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all innovation music listen">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon9.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon9.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Play Time </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon10.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon10.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Your Innovations </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all innovation">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon11.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon11.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Music Hour </a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio dt-sc-one-third column all fun music">
                        <div class="portfolio-thumb">
                            <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                            <img src="{{ asset('website/images/cartoon12.jpg') }}" alt="" title="">
                            <div class="image-overlay">
                                <a href="portfolio-detail.html" class="link"><span class="fa fa-link"></span></a>
                                <a href="{{ asset('website/images/cartoon12.jpg') }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                        class="fa fa-search"></span></a>
                            </div>
                        </div>
                        <div class="portfolio-detail">
                            <div class="portfolio-title">
                                <h5><a href="portfolio-detail.html"> Get Ready for Adventure </a></h5>
                            </div>
                        </div>
                    </div>
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
                <aside class="widget widget_recent_entries">
                    <h3 class="widgettitle">Kids Voices</h3>

                    <div class="dt-sc-tabs-container">
                        <ul class="dt-sc-tabs">
                            <li><a href="#"> New </a></li>
                            <li><a href="#"> Popular </a></li>
                        </ul>
                        <div class="dt-sc-tabs-content">
                            <h5><a href="#">Explore your Thoughts!</a></h5>
                            <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                            <h5><a href="#">Perform for Success!</a></h5>
                            <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque
                                laudantium.</p>
                        </div>
                        <div class="dt-sc-tabs-content">
                            <h5><a href="#">Admire &amp; Achieve!</a></h5>
                            <p>Sed ut perspiciatis unde omi iste natus error siterrecte voluptatem accusantium doloremque
                                laudantium.</p>
                            <h5><a href="#">Your Opportuntiy!</a></h5>
                            <p>Nam consectetur justo non nis dapibus, ac commodo mi sagittis. Integer enim odio.</p>
                        </div>
                    </div>

                </aside>
                <aside class="widget widget_tag_cloud">
                    <h3 class="widgettitle">Hit on Tags</h3>
                    <div class="tagcloud">
                        <a href="#">Listen</a>
                        <a href="#">Observe</a>
                        <a href="#">Admire</a>
                        <a href="#">Accomplish</a>
                        <a href="#">Perform</a>
                        <a href="#">Achieve</a>
                        <a href="#">Target</a>
                    </div>
                </aside>
            </section>
        </div>
    </div>
@endsection
