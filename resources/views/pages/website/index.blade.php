@extends('layouts.website', ['pageName' => 'home'])
@push('web-css') 
<style>
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
@endpush

@section('title', 'Home')

@section('web-content')
    <div id="main">
        <div id="slider">
            <div id="layerslider_4" class="ls-wp-container"
                style="width:100%;height:610px;max-width:1920px;margin:0
                auto;margin-bottom: 0px;">
                @foreach ($slider as $item)
                <div class="ls-slide" data-ls="slidedelay:3000;
                    transition2d: all;">
                    <img src="{{ asset($item->image) }}" class="ls-bg"
                        alt="Slide background" />
                </div>

                @endforeach


            </div>
        </div>


        <section id="primary" class="content-full-width">
            <!-- about section start -->
            <section class="fullwidth-background dt-sc-parallax-section
                turquoise-bg">

                <div class="container">

                    <div class="dt-sc-two-third column first">
                        <div class="card">
                            <div class="card-body">
                                <div class="welcome-wrap">
                                    <h2>Welcome To {{ $content->name }}</h2>
                                    <div class="justify aboutText">{!! $content->about !!}</div>
                                </div>
                                <a class="read_more" href="{{ route('about') }}"> Read More About Us <span class="fa fa-chevron-circle-right"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="dt-sc-one-third column">
                        @foreach ($management as $chair)
                            <div class="card">
                                <div class="card-header custom-card-header">
                                    <h2>Message Of Chairman </h2>
                                </div>
                                <div class="card-body">
                                    <div class="chairman">
                                        <div class="chairman_img">
                                            <img src="{{ asset('uploads/management/'.$chair->image) }}" alt="chairman" class="chairImg">
                                        </div>
                                        <div class="chaiman_name">
                                            <h3>{{ $chair->name }}</h3>
                                            <p>{{ $chair->designation }}</p>
                                        </div>
                                    </div>
                                    <div class="chairman_message">
                                        <div class="justify">{!! $chair->description !!}</div>
                                    </div>
                                    <a class="read_more" href="{{ route('about') }}/#chairman-message"> Read More <span class="fa fa-chevron-circle-right"></span></a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </section>

            <div class="dt-sc-hr"></div>
            <!-- about section end -->

            <div class="container">
                <h2 class="dt-sc-hr-green-title">Our Activities </h2>
                @php $actkey = [0, 4, 8]; @endphp
                @foreach ($activities as $key=>$activity)
                    <div class="dt-sc-one-fourth column pb-3 {{ in_array($key, $actkey) ? 'first' : '' }}">
                        <div class="dt-sc-ico-content type1">
                            <div class="icon">
                                <span class="icon-outer">
                                    <a href="{{route('active.details',$activity->id)}}">
                                        <img src="{{ asset($activity->image) }}" class="actImg" alt="" title="">
                                    </a>
                                  
                                    <span class="infolayer">
                                        <a href="{{route('active.details',$activity->id)}}"><i class="fa fa-link"></i></a>
                                    </span>
                                </span>
                            </div>
                            <h4><a href="{{route('active.details',$activity->id)}}">{{ $activity->title }}</a></h4>
                            <div class="actDescript">{!! $activity->description !!}</div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="dt-sc-hr"></div>

            <section class="fullwidth-background dt-sc-parallax-section turquoise-bg">
                <div class="container">
                    <div class="dt-sc-one-half column first">
                        <h2>Why We Are Special</h2>
                        @php $spclkey = [0, 2, 4, 6, 8]; @endphp
                        @foreach ($specials as $key=>$spcl)
                            <div class="dt-sc-one-half column {{ in_array($key, $spclkey) ? 'first' : '' }}">
                                <div class="dt-sc-ico-content type2">
                                    <div class="dt-sc-one-fourth column">
                                        <div class="icon">
                                            <span class="icon-outer">
                                                <a href="{{route('spacial.details',$spcl->id)}}"><img src="{{ asset($spcl->image) }}" class="spcImg" alt="" title=""></a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="dt-sc-one-half column spclhead">
                                        <h4><a href="{{route('spacial.details',$spcl->id)}}"> {{ $spcl->title }} </a></h4>
                                    </div>
                                    <div class="justify spcldes">{!! $spcl->description !!}</div>
                                </div>
                                <div class="dt-sc-hr-very-small"></div>
                            </div>
                        @endforeach
                    </div>

                    <div class="dt-sc-one-half column">
                        <h2>With Music4Kids, music is childs play!</h2>
                        <div class="add-slider-wrapper">
                            <ul class="add-slider">
                                @foreach ($spslider as $item)
                                <li> <img src="{{ asset($item->image) }}" alt="" title=""> </li>
                                @endforeach
                                {{-- <li> <img src="{{ asset('website/images/sch2.png') }}" alt="" title="">
                                </li>
                                <li> <img src="{{ asset('website/images/sch3.png') }}" alt="" title="">
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="dt-sc-hr"></div>

            <!-- News Events Start  -->
            <div class="container">
                <div class="dt-sc-one-half column first">
                    <div class="card-header">
                        <h2 style="margin-bottom: 0;">Upcoming Events</h2>
                    </div>
                    <div class="custom-card ">
                        <div class="card-body">
                            @foreach ($news as $item)
                            <div class="events-list "height="365">
                               <div class="event-thumb">
                                   <a href="{{route('newsdetails',$item->id)}}" title="">
                                       <img src="{{ asset($item->image) }}" class=""
                                           alt="" title="">
                                   </a>
                               </div>
                               <div class="event-details">
                                   <h2><a href="#">{{$item->title}}</a></h2>
                                   <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                   <div class="event-excerpt">
                                       {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('newsdetails',$item->id)}}">read more</a>
                                   </div>
                               </div>
                           </div>

                            @endforeach

                            <a class="read_more" href=""> View All <span
                                    class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>

                <div class="dt-sc-one-half column">
                    <div class="card-header">
                        <h2 style="margin-bottom: 0;">Notice Board</h2>
                    </div>
                    <div class="custom-card">
                        <div class="card-body">
                            <marquee height="365" behavior="scroll" direction="up" scrollamount="3"
                                onmouseover="this.stop();" onmouseout="this.start();">
                             @foreach ($notice as $item)
                             <div class="events-list">
                                <div class="event-details">
                                    <h2><a href="{{route('notice.details',$item->id)}}">{{$item->title}}</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                    <div class="event-excerpt">
                                        {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('notice.details',$item->id)}}">read more</a>
                                    </div>
                                </div>
                            </div>
                             @endforeach
                            </marquee>
                            <a class="read_more" href=""> View All <span
                                    class="fa fa-chevron-circle-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="dt-sc-hr-very-small"></div>
            </div>

            <div class="dt-sc-hr"></div>
            <!-- news events end -->

            <section class="fullwidth-background dt-sc-parallax-section gallery-bg">
                <div class="container">
                    <h2 class="dt-sc-hr-green-title">Photo Gallery </h2>
                    <div class="front-portfolio-container">
                        @foreach ($gallery as $key => $item)
                        <div class="portfolio-content portfolio-content{{$key+1}}">
                            <div class="front-portfolio">
                                <div class="portfolio-outer">
                                    <div class="portfolio-thumb">
                                        <img src="{{ asset('uploads/gallery/'.$item->image) }}" alt=""
                                            title="">
                                        <div class="image-overlay">
                                            <h5><a href="#">{{$item->title}}</a></h5>
                                            <a href="{{ asset('uploads/gallery/'.$item->image) }}"
                                                data-gal="prettyPhoto[gallery]" class="zoom"><span
                                                    class="fa
                                                fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="dt-sc-hr-small"></div>
                        <div class="aligncenter">
                            <a href="{{route('gallery')}}" class="dt-sc-button medium mustard"> Hit here to view all <span
                                    class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>

                </div>
            </section>
            <section class="fullwidth-background dt-sc-parallax-section
                orange-bg">

                <div class="container">
                    <h2 class="dt-sc-hr-white-title">Video Gallery</h2>
                    @php $newkey = [0, 4, 8, 12, 16, 20]; @endphp
                    @foreach ($video as $key => $item)
                        <div class="column dt-sc-one-fourth {{ in_array($key, $newkey) ? 'first' : '' }} video_gall">
                            <div class="video">
                                <iframe width="100%" height="150" src="{{$item->link}}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer;
                                    autoplay; clipboard-write;
                                    encrypted-media; gyroscope;
                                    picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                            <div class="title">
                                <h2>{{$item->title}}</h2>
                            </div>
                        </div>
                    @endforeach
                    <div class="aligncenter">
                        <a href="{{route('video')}}" class="dt-sc-button medium mustard v_gallery"> Hit here to view all <span class="fa fa-chevron-circle-right"> </span></a>
                    </div>

                </div>

            </section>

            <div class="dt-sc-hr"></div>
            <section id="teacher" class="teacher">
                <div class="container clearfix">
                    <h2 class="dt-sc-hr-green-title">Our Teachers</h2>
                    @php $techkey = [0, 8, 16, 24, 32, 40, 48, 56, 64, 72, 80, 88, 96, 104, 112, 120, 128, 136, 144, 152, 160, 168, 176, 184, 192, 200]; @endphp
                    @foreach ($teacher as $key=>$item)
                        <div class="column dt-sc-one-eighth teachersec {{ in_array($key, $techkey) ? '' : '' }}">
                            <div class="dt-sc-team">
                                <div class="image">
                                    <img class="item-mask" src="{{ asset('website/images/mask.png') }}" alt="" title="">
                                    <img src="{{ asset($item->image) }}" class="techImages" alt="Teacher Image" title="Teacher Image">
                                    <div class="dt-sc-image-overlay"></div>
                                </div>
                                <div class="team-details">
                                    <h5> {{ $item->name }} </h5>
                                    <h6> {{ $item->designation }} </h6>
                                    <p> {{ $item->specality }} </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
           

            <div class="dt-sc-hr"></div>

            <section class="fullwidth-background dt-sc-parallax-section product_bg">
                <div class="container">
                    <h2 class="dt-sc-hr-white-title">Dress Code</h2>
                    <ul class="products">
                        @foreach ($dress as $key => $item)
                            <li class="dt-sc-one-fourth column {{ $key == 0 ? 'first' : '' }}">
                                <div class="product-thumb">
                                    <a href="#"><img src="{{ asset($item->image) }}" alt="dress image" title="" class="dressCodeimg"></a>
                                    <div class="image-overlay"></div>
                                </div>
                                <div class="product-details">
                                    <h5 style="text-align: center;">{{$item->title}}</h5>
                                </div>
                            </li>
                         @endforeach
                    </ul>
                </div>
            </section>
        </section>
    </div>
@endsection
