@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>カテゴリーから探す</h3>
            <ul>
                @foreach ($categories as $category)
                    <li class="">
                        <a href="{{ route('shop.index', ['category' => $category->slug]) }}"">{{ $category->name }}</a>
                    </li>
                @endforeach
            </ul>

            <h3>値段から探す</h3>
            <ul>
                <li><a href="#">¥0 - ¥10000</a></li>
                <li><a href="#">¥10000 - ¥30000</a></li>
                <li><a href="#">¥30000+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">Surfboards</h1>
            <div class="products text-center">
                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @endforeach
            </div> <!-- end products -->
        </div>
    </div>


@endsection
