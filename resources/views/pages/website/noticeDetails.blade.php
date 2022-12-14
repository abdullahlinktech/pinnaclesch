@extends('layouts.website', ['pageName' => 'news'])
@section('title', 'News Details')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Notice Details </h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <a href="blog.html">Notice</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Notice Details</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5">
                <article class="blog-entry">
                    <div class="blog-entry-inner">
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3> {{ $notice->title }} </h3>
                                <p>{{$notice->date}}</p>
                            </div>

                            <div class="entry-body">
                                {!! $notice->description !!}
                            </div>
                        </div>
                    </div>
                </article>
            </section>
{{-- 
            <section id="secondary">
                <aside class="widget widget_categories ">
                    <h3 class="widgettitle">Latest News</h3>
                    @foreach ($newslist as $item)
                    <div class="events-list "height="365">
                       <div class="event-thumb">
                           <a href="{{route('newsdetails',$item->id)}}" title="">
                               <img src="{{ asset($item->image) }}" class=""
                                   alt="" title="">
                           </a>
                       </div>
                       <div class="event-details">
                           <h2><a href="{{route('newsdetails',$item->id)}}">{{$item->title}}</a></h2>
                           <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                           <div class="event-excerpt">
                               {!! Str::of($item->description)->words(16, '...');!!} <a href="{{route('newsdetails',$item->id)}}">read more</a>
                           </div>
                       </div>
                   </div>

                    @endforeach
                </aside>
            </section> --}}
        </div>
    </div>
@endsection
