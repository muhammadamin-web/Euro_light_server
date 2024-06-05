@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $product->{'tags_' . app()->getLocale()} }},люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $product->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $product->{'meta_description_' . app()->getLocale()} }}">
<title>Euro Light - {{ $product->{'name_' . app()->getLocale()}  }}</title>
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/interier_detail.css') }}">

@endsection
@section('content')

<div class="interier_detail">
  <p class="interyer_title">{{ __('app.categories') }} ><a style="color: black;" href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $product->category->{'slug_' . app()->getLocale()}]) }}">
      {{ $product->category->{'name_' . app()->getLocale()}  }}
    </a> </p>
  <div class="interier_detail_container">
    <h1 class="interier_detail_title">{{ $product->{'name_' . app()->getLocale()}  }}</h1>
  </div>
  <div class="show_image_container">
    <img src="{{ asset($product->image_path) }}" alt="" class="interier_detail_img">
  </div>

  <p class="image_alt">{{ $product->{'meta_description_' . app()->getLocale()} }}</p>

  <div class="interier_detail_description">
    <p>{!! $product->{'description_' . app()->getLocale()} !!}</p>
  </div>
</div>
<div class="container_product">
  <h1 class="product_pag_service">Другие продукты</h1>
  <div class="card_container">
    @foreach($products_footer as $products)

    <div class="card" onclick="raiseText()">
      <img src="{{ asset($products->image_path) }}" alt="Card Image">
      <div class="card-info">
        <p class="card-info_title">{{ $products->{'name_' . app()->getLocale()}  }}</p>
        <div class="card_button_container">
          <a href="" class="card_button">{{ __('app.more_button') }}</a>
        </div>
      </div>
    </div>
    @endforeach


  </div>
</div>
@endsection