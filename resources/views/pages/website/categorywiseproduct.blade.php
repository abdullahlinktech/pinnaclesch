@extends('layouts.website', ['pageName' => 'categorywiseproduct'])
@section('title', 'Product All')
@section('web-content')
    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Shop</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Shop</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5">
                <ul class="products">
                    @php $prokey = [0, 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 44, 48, 52, 56, 60, 64, 68, 72, 76, 80, 84, 88, 92, 96, 100, 104, 108, 112, 116, 120, 124, 128, 132, 136, 140, 144, 148, 152, 165, 160, 164, 168, 172, 176, 180, 184, 188, 192, 196, 200]; @endphp
                    @foreach ($categorywiseproduct as $key=>$item)
                        <li class="dt-sc-one-third column {{ in_array($key, $prokey) ? 'first' : '' }}">
                            <div class="product-thumb">
                                <a href="{{ route('productdetails',$item->id) }}">
                                    <img src="{{ asset($item->image) }}" alt="" title="Product Image" class="proimg">
                                </a>

                                <div class="image-overlay">
                                    <div class="product-button">
                                        <a href="{{ route('productdetails',$item->id) }}" class="add-cart-btn"> <span class="fa fa-eye"></span> </a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-details">
                                <h5><a href="{{ route('productdetails',$item->id) }}"> {{ $item->title }} </a></h5>
                                <span class="price"> ৳{{ $item->price }} </span>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <section id="secondary">
                <aside class="widget widget_categories">
                    <h3 class="widgettitle">Categories</h3>
                    <ul>
                        @php
                            use App\Models\Category;
                            $categories = Category::get();
                        @endphp
                        @foreach ($categories as $cat)
                            <li><a href="{{ route('categorywiseproduct',$cat->id) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </aside>
                <aside class="widget widget_text">
                    <h3 class="widgettitle">Kids Achievements</h3>
                    <p class="justify">Our kids are involved in many different things. They play multiple sports, are involved in other extracurricular activities, and have a wide variety of interests. Sometimes they achieve a lot, others they don’t achieve as much.</p>
                </aside>
            </section>
        </div>
    </div>
@endsection
