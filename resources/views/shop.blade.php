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
        {{--   --}}
        <div class="sidebar">
            <h3>カテゴリーから探す</h3>
            <ul>
                @foreach ($categories as $category)
                    <li class="{{ setActiveCategory($category->slug) }}">
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

        {{-- カテゴリー名 --}}
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">{{ $categoryName }}</h1>
                <div class="sortbyPrice">
                    <strong>値段 : </strong>
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'low_high']) }}">安い順</a> |
                    <a href="{{ route('shop.index', ['category'=> request()->category, 'sort' => 'high_low']) }}">高い順</a>

                </div>
            </div>
            <div class="products text-center">
                @forelse ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </div>
                @empty
                    <div style="text-align: left">商品が見つかりせんでした。</div>
                @endforelse

            </div> <!-- end products -->

            {{-- ページネーション  --}}
            {{ $products->appends(request()->input())->links() }}

        </div>
    </div>


@endsection
