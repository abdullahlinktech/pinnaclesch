@extends('layouts.website', ['pageName' => 'teachers'])
@section('title', 'Our Teachers')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Our Teachers</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Our Teachers</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="content-full-width pt-5">
                <h2 class="dt-sc-hr-green-title mt-4">Our Teachers</h2>
                @php $newkey = [0, 8, 16, 24, 32, 40, 48, 56, 64, 72, 80, 88, 96, 104, 112, 120, 128, 136, 144, 152, 160, 168, 176, 184, 192, 200]; @endphp
                @foreach ($teachers as $key=>$item)
                    {{--  <div class="column dt-sc-one-eighth {{ $key == 0 || $newkey*($key+8) == $key  ? 'first' : ''}}">  --}}
                    {{--  <div class="column dt-sc-one-eighth {{ $key  }} {{ $newkey*($key+1)  }}">  --}}
                    <div class="column dt-sc-one-eighth teachersec {{ in_array($key, $newkey) ? 'first' : '' }}">
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
                    {{--  @php $newkey++; @endphp  --}}
                @endforeach
            </section>
        </div>
    </div>
@endsection
