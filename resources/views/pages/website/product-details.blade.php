@extends('layouts.website', ['pageName' => 'product-details'])
@section('title', 'Product Details')
@section('web-content')

    <div id="main">
        <div class="breadcrumb-section">
            <div class="container">
                <h1>Product Details</h1>
                <div class="breadcrumb">
                    <a href="{{ route('home') }}">Home</a>
                    <span class="fa fa-angle-double-right"></span>
                    <span class="current">Product Details</span>
                </div>
            </div>
        </div>

        <div class="container">
            <section id="primary" class="with-sidebar pt-5 pb-5">
                <div class="images">
                    <a href="#">
                        <img src="{{ asset($product->image) }}" alt="" title="Product Image" class="proimg">
                    </a>
                </div>
                <div class="summary">
                    <h2>{{ $product->title }}</h2>
                    <p class="price">
                        <span>৳ {{ $product->price }}</span>
                    </p>
                    <div>{!! $product->s_description !!}</div>

                </div>
                <div class="dt-sc-hr"></div>

                <div class="dt-sc-tabs-container">
                    <div class="dt-sc-tabs-content">
                        <h2>Product Description</h2>
                        <div class="justify">{!! $product->description !!}</div>
                    </div>
                </div>
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
