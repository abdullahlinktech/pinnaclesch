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
                @php $newkey = [0, 3, 6, 9, 12]; @endphp
             @foreach ($news as $key => $item)
             <div class="column dt-sc-one-third {{ in_array($key, $newkey) ? 'first' : '' }}">
                <article class="blog-entry">
                    <div class="blog-entry">
                        <div class="entry-thumb">
                            <a href="{{route('newsdetails',$item->id)}}"><img src="{{ asset($item->image) }}" alt="" title=""></a>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                               <div class="news_header" style="overflow: hidden; height:40px">
                                <h3  style="font-size: 19px"><a  href="{{route('newsdetails',$item->id)}}"> {{$item->title}} </a></h3>
                               </div>
                                <p><span class="fa fa-calendar"></span> {{$item->date}}</p>
                            </div>

                            <div class="entry-body" style="height: 120px; overflow:hidden;text-align:justify">
                                <p>{!!$item->description!!}</p>
                            </div>
                            <a href="{{route('newsdetails',$item->id)}}" class="dt-sc-button small"> Read More <span
                                    class="fa fa-chevron-circle-right"> </span></a>
                        </div>
                    </div>
                </article>
            </div>

             @endforeach

            </section>

            <section id="secondary">
                <aside class="widget widget_categories ">
                    <h3 class="widgettitle">Latest News</h3>
                    @foreach ($news as $item)
                    <div class="events-list "height="365">
                       <div class="event-thumb">
                           <a href="{{route('newsdetails',$item->id)}}" title="">
                               <img src="{{ asset($item->image) }}" class=""
                                   alt="" title="">
                           </a>
                       </div>
                       <div class="event-details">
                          <div class="ln_header" style="font-size: 14px;">
                            <h2><a href="{{route('newsdetails',$item->id)}}">{{$item->title}}</a></h2>
                          </div>
                           <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                           <div class="event-excerpt" sd>
                               {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('newsdetails',$item->id)}}">read more</a>
                           </div>
                       </div>
                   </div>

                    @endforeach
                </aside>
            </section>
        </div>
    </div>
@endsection
