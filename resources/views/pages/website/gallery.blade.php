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
            <section  class="with-sidebar " >
                <div class="dt-sc-portfolio-container" style="margin-top:70px">
                    @php $actkey = [0, 4, 8]; @endphp
                @foreach ($gallery as $key=> $item)
                 <div class="portfolio dt-sc-one-fourth column {{ in_array($key, $actkey) ? 'first' : '' }} music">
                    <div class="portfolio-thumb">
                        <img class="item-mask" src="{{ asset('website/images/portfolio-mask.png') }}" alt="" title="">
                        <img src="{{ asset('uploads/gallery/'.$item->image) }}" alt="" title="" style="width: 100%;height:238px">
                        <div class="image-overlay">
                            <a href="{{ asset('uploads/gallery/'.$item->image) }}" data-gal="prettyPhoto[gallery]" class="zoom"><span
                                    class="fa fa-search"></span></a>
                        </div>
                    </div>
                    <div class="portfolio-detail">
                        <div class="portfolio-title">
                            <h5><a href="#">{{$item->title}} </a></h5>
                        </div>
                    </div>
                </div>
    
                @endforeach
                  
        
                </div>

            </section>

          
        </div>
    </div>
@endsection
