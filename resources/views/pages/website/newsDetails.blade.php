@extends('layouts.website', ['pageName' => 'news'])
@section('title', 'News Details')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>News Details</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <a href="blog.html">News & Events</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">News Details</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5">
                <article class="blog-entry">
                    <div class="blog-entry-inner">
                        <div class="entry-meta">
                            <a href="#" class="blog-author"><img src="{{ asset('website/images/rounded-bg-img.jpg') }}" alt="" title=""></a>
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
                            <a href="#"><img src="{{ asset('website/images/blog_img1.jpg') }}" alt="" title=""></a>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3> Activities Improves Mind </h3>
                            </div>

                            <div class="entry-body">
                                <p>Roin bibendum nibhsds. Nuncsdsd fermdada msit ametadasd consequat. Praes porr nulla sit
                                    amet dui lobortis, id venenatis nibh accums. Proin lobortis tempus odio eget venenatis.
                                    Proin fermentum ut massa at bibendum. Proin bibendum non est quis egestas. Pellentesque
                                    at enim id enim tempus placerat. Etiam tempus gravida leo, et gravida justo bibendum
                                    non. Suspendisse vitae fermentum sapien.</p>
                                <blockquote class="alignright">
                                    <q>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                        tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                                        neque sed ipsum. Maecenas nec odio et ante tincidunt tempus.</q>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sollicitudin interdum eros
                                    at pellentesque. Donec dictum rhoncus sapien aliquet tempor. Cras cursus nisi sed dui
                                    scelerisque posuere. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac,
                                    enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra
                                    nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi
                                    vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas
                                    tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem
                                    neque sed ipsum. Maecenas nec odio et ante tincidunt tempus.</p>
                                <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et
                                    ante tincidunt tempus.Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                                    sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Maecenas nec odio et
                                    ante tincidunt tempus. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus,
                                    sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Maecenas nec odio et
                                    ante tincidunt tempus.</p>
                            </div>
                        </div>
                    </div>
                </article>
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
