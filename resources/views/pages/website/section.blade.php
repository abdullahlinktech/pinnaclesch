@extends('layouts.website', ['pageName' => 'Section'])
@section('title', 'Section')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Section</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Section</span>
                </div>
            </div>
        </div>
        {{--  Class Section  --}}
      
            <div class="container">
                <section id="primary" class="content-full-width pt-5 pb-5">
                        <div class="column dt-sc-one-half first">
                            <div class="about-wrapper">
                                <ul class="about">
                                    <li> <img src="{{ asset($section->image) }}" alt="" title="" class="classImg"> </li>
                                </ul>
                            </div>
                        </div>
                        <div class="column dt-sc-one-half">
                            <h2>{{ $section->title }}</h2>
                            <div class="justify">{!! $section->description !!}</div>
                        </div>
                    <div class="dt-sc-hr"></div>
                    <div class="dt-sc-hr"></div>
                </section>
            </div>
      
    </div>
@endsection

 @push('web-js')
   
@endpush 
