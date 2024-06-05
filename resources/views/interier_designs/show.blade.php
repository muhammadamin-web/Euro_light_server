@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $interier_design->{'tags_' . app()->getLocale()} }},люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="{{ $interier_design->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $interier_design->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $interier_design->{'meta_description_' . app()->getLocale()} }}">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js" integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.css" integrity="sha512-hGBKkjAVJUXoImyDezOKpzuY4LS1eTvJ4HTC/pbxn47x5zNzGA1vi3vFQhhOehWLTNHdn+2Yqh/IRNPw/8JF/A==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<title>Euro Light - {{ $interier_design->{'name_' . app()->getLocale()} }}</title>
<link rel="stylesheet" href="{{ asset('css/interier_detail.css') }}">

@endsection
@section('content')

<div class="interier_detail_banner">
  <div class="jtaCarousel">
    <div class="banner-controls banner-prev-position">
      <div class="banner-control-button banner-prev">
        <i class="fa fa-angle-left"></i>
      </div>
      <!-- /.banner-control-button banner-prev -->
    </div>
    <!-- /.banner-controls banner-prev-position -->
    <ul class="banner cf ul-reset">
    @foreach($interier_designs_footer as $interier_design_footer)
    <a href="{{ route('interier_design.show', ['locale' => app()->getLocale(), 'slug' => $interier_design_footer->{'slug_' . app()->getLocale()}]) }}" title="API">

      <li class="banner-item">
        <img src="{{ asset($interier_design_footer->image_path) }}" alt="Slayd 1">
        <div class="slide-text">{{ $interier_design->{'name_' . app()->getLocale()} }}</div>
      </li>
      </a>
      
      @endforeach

    
    </ul>
    <!-- /.banner cf ul-reset -->
    <div class="banner-controls banner-next-position">
      <div class="banner-control-button banner-next">
        <i class="fa fa-angle-right"></i>
      </div>
      <!-- /.banner-control-button banner-next -->
    </div>
    <!-- /.banner-controls banner-next-position -->
    <div class="banner-location"></div>
    <!-- /.banner-location -->
  </div>
  <!-- /.jtaCarousel -->
</div>
<div class="interier_detail">
    <p class="interyer_title lang" key="interier_detail_title_text">interyer</p>
    <div class="interier_detail_container">
        <h1 class="interier_detail_title">{{ $interier_design->{'name_' . app()->getLocale()} }}</h1>
    </div>
    <div class="show_image_container">
    <img src="{{ asset($interier_design->image_path) }}" alt="" class="interier_detail_img">
    </div>
    <p class="image_alt">{{ $interier_design->{'meta_description_' . app()->getLocale()} }}</p>

    <div class="interier_detail_description">
        <p>{!! $interier_design->{'description_' . app()->getLocale()} !!}</p>
    </div>
 </div>




<!-- old _version-->
<script src="//use.fontawesome.com/0a5f10fda5.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="{{ asset('js/banner_slider.js') }}"></script>
@endsection