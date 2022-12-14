@extends('layouts.website', ['pageName' => 'video'])
@section('title', 'Video Gallery')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Video Gallery</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Video Gallery</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section  class="with-sidebar" style="margin-top: 70px">
                @php $newkey = [0, 4, 8, 12, 16, 20]; @endphp
                @foreach ($video as $key => $item)
                <div class="column dt-sc-one-fourth video_item {{ in_array($key, $newkey) ? 'first' : '' }}">
                    <iframe class="entry-thumb" width="100%" height="170" src="{{$item->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                @endforeach

            </section>

        </div>
    </div>
@endsection
