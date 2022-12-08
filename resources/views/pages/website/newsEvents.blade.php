@extends('layouts.website', ['pageName' => 'news-events'])
@section('title', 'News & Events')
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
                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img1.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Activities Improves Mind </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column dt-sc-one-half">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img2.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img3.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Wonderland Adventures </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column dt-sc-one-half">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img4.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column dt-sc-one-half first">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img5.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Wonderland Adventures </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="column dt-sc-one-half">
                    <article class="blog-entry">
                        <div class="blog-entry-inner">
                            <div class="entry-meta">
                                <a href="blog-detail.html" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}"
                                        alt="" title=""></a>
                                <div class="date">
                                    <span> 27 </span>
                                    <p> Aug <br> 2014 </p>
                                </div>
                                <a href="#" class="comments">
                                    12 <span class="fa fa-comment"> </span>
                                </a>
                                <a href="#" class="entry_format"><span class="fa fa-picture-o"></span></a>
                            </div>
                            <div class="entry-thumb">
                                <a href="blog-detail.html"><img src="{{ asset('website/images/blog_img6.jpg') }}" alt=""
                                        title=""></a>
                            </div>
                            <div class="entry-details">
                                <div class="entry-title">
                                    <h3><a href="blog-detail.html"> Weekly Reader Zone </a></h3>
                                </div>

                                <div class="entry-body">
                                    <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla
                                        sit amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget
                                        venenatis. Proin fermentum ut massa at bibendum. Proin bibendum non est quis
                                        egestas. Pellentesque at enim id enim tempus placerat. Etiam tempus gravida leo, et
                                        gravida justo bibendum non. Suspendisse vitae fermentum sapien.</p>
                                </div>
                                <a href="blog-detail.html" class="dt-sc-button small"> Read More <span
                                        class="fa fa-chevron-circle-right"> </span></a>
                            </div>
                        </div>
                    </article>
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
            </section>
        </div>
    </div>
@endsection
