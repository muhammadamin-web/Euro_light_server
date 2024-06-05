@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>Euro Light - {{ $category->{'name_' . app()->getLocale()} }}</title>
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection
@section('content')
<!-- <div class="container">
    <h2>{{ $category->name }} Kategoriya</h2>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $product->image_path }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('products.show', ['locale' => app()->getLocale(), 'product' => $product->id]) }}" class="btn btn-primary">Batafsil</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div> -->
<div class="product">
    <div class="container_product">
        <h1 class="product_pag_service lang" key="products">{{ $category->{'name_' . app()->getLocale()} }}</h1>
        <div class="card_container">
            @foreach($products as $product)

            <div class="card" onclick="raiseText()">
                <img src="{{ asset($product->image_path) }}" alt="Card Image">
                <div class="card-info">
                    <p class="card-info_title">{{ $product->{'name_' . app()->getLocale()}  }}</p>
                    <div class="card_button_container">
                        <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="card_button lang" key="more_button">{{ __('app.more_button') }}</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- old verison-->




@endsection