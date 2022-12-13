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
                     {{-- Notice for Teacher  --}}
                    <h2 class="dt-sc-hr-green-title" id="teacher">Notice for Teacher</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            @if(count($noticeTn)>0)
                                @foreach ($noticeTn as $item)
                                <div class="events-list">
                                <div class="event-details">
                                    <h2><a href="#">{{$item->title}}</a></h2>
                                    <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                    <div class="event-excerpt">
                                        <p>{!!Str::of($item->description)->words(60, '...');!!} <a href="">read more...</a></p>
                                    </div>
                                </div>
                                </div>
                                @endforeach

                             @else
                             <p style="text-align: center;font-size: 20px">No Notice Available</p>
                            @endif
                        </div>
                    </div>

                    {{--  Notice for Student  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="student">Notice for Student</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            @if(count($noticeSn)>0)
                           @foreach ($noticeSn as $item)
                           <div class="events-list">
                            <div class="event-details">
                                <h2><a href="#">{{$item->title}}</a></h2>
                                <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                <div class="event-excerpt">
                                    <p>{!!Str::of($item->description)->words(60, '...');!!} <a href="">read more...</a></p>
                                </div>
                            </div>
                          </div>
                           @endforeach

                           @else
                           <p style="text-align: center;font-size: 20px">No Notice Available</p>
                           @endif

                        </div>
                    </div>

                    {{--  Notice for Gaurdian  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="gaurdian">Notice for Gaurdian</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            @if(count($noticeGn)>0)
                            @foreach ($noticeGn as $item)
                            <div class="events-list">
                              <div class="event-details">
                                  <h2><a href="#">{{$item->title}}</a></h2>
                                  <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                  <div class="event-excerpt">
                                      <p>{!!Str::of($item->description)->words(60, '...');!!} <a href="">read more...</a></p>
                                  </div>
                              </div>
                            </div>

                            @endforeach

                            @else
                            <p style="text-align: center;font-size: 20px">No Notice Available</p>
                            @endif
                        </div>
                    </div>

                    {{--  Notice for Career  --}}
                    <h2 class="dt-sc-hr-green-title pt-5" id="career">Notice for Job</h2>
                    <div class="custom-card">
                        <div class="card-body">
                            @if(count($noticeJn)>0)
                                @foreach ($noticeJn as $item)
                                    <div class="events-list">
                                        <div class="event-details">
                                            <h2><a href="#">{{$item->title}}</a></h2>
                                            <div class="event-meta"><span class="fa fa-calendar"></span> {{$item->date}}</div>
                                            <div class="event-excerpt">
                                                <p>{!!Str::of($item->description)->words(60, '...');!!} <a href="">read more...</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             @else
                                <p style="text-align: center;font-size: 20px">No Notice Available</p>
                            @endif

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
