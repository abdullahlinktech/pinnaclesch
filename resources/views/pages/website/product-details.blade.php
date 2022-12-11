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
                        <img src="{{ asset('website/images/product5.jpg') }}" alt="" title="Product Image" class="proimg">
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
                        <li>
                            <a href="#">Play School<span>(16)</span></a>
                        </li>
                        <li>
                            <a href="#">Academic Performance<span>(3)</span></a>
                        </li>
                        <li>
                            <a href="#">Co-curricular<span>(26)</span></a>
                        </li>
                        <li>
                            <a href="#">Visual Education<span>(18)</span></a>
                        </li>
                        <li>
                            <a href="#">Inter Competition<span>(4)</span></a>
                        </li>
                    </ul>
                </aside>
                <aside class="widget widget_text">
                    <h3 class="widgettitle">Kids Achievements</h3>
                    <p>In lobortis rhoncus pulvinar. Pellentesque habitant morbi tristique <a href="#"
                            class="highlighter">senectus</a> et netus et malesuada fames ac turpis egestas. </p>
                    <p>Sed tempus ligula ac mi iaculis lobortis. Nam consectetur justo non nisi dapibus, ac commodo mi
                        sagittis. Integer enim odio.</p>
                </aside>
            </section>
        </div>
    </div>
@endsection
