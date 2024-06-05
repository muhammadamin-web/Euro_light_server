@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>Euro Light - {{ __('app.products') }}</title>
<link rel="stylesheet" href="{{ asset('css/product.css') }}">

@endsection

@section('content')

<div class="product">
  <div class="container_product">
    <h1 class="product_pag_service lang" key="products">{{ __('app.products') }}</h1>
    <div class="card_container">
      @foreach($products as $product)
      <div class="card" onclick="raiseText()">
        <img src="{{ asset($product->image_path) }}" alt="Card Image">
        <div class="card-info">
          <p class="card-info_title">{{ $product->{'name_' . app()->getLocale()}  }}</p>
          <div class="card_button_container">
            <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}" class="card_button lang" key="more_button">batafsil</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- old version-->

<!-- <div class="product_page_container">
    <h2 class="product_page_title">{{ __('app.products') }}</h2>
    <div class="cards_container">
    @foreach($products as $product)


    <a href="{{ route('product.show', ['locale' => app()->getLocale(), 'slug' => $product->{'slug_' . app()->getLocale()}]) }}">
        <div class="product_page_card">
                <img src="{{ asset($product->image_path) }}" alt="">
       
          <h4 class="product_card_text">{{ $product->{'name_' . app()->getLocale()}  }}</h4>
        </div>
      </a> -->
<!-- @endforeach -->

<!-- </div>
</div> -->
@endsection