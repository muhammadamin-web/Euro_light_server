@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js" integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.css" integrity="sha512-hGBKkjAVJUXoImyDezOKpzuY4LS1eTvJ4HTC/pbxn47x5zNzGA1vi3vFQhhOehWLTNHdn+2Yqh/IRNPw/8JF/A==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500&display=swap" rel="stylesheet">
<title>Euro Light - {{ __('app.interier_design') }}</title>
<link rel="stylesheet" href="{{ asset('css/interier.css') }}">

@endsection
@section('content')
<div class="" id="fullpage">
  @foreach($interier_designs as $interier_design)

  <div class="disegn_interyer  section vertical-scrolling">
    <!-- <div class="container"> -->
    <div class="{{ $loop->iteration % 2 == 1 ? 'design_block' : 'design_block design_block_right' }}">
      <div class="design_photo">
        <img src="{{ asset($interier_design->image_path) }}" alt="" class="design_photo_img">
      </div>
      <div class="design_content">
        <h1 class="design_title">{{ $interier_design->{'name_' . app()->getLocale()}  }}</h1>
        <div class="border_button"></div>
        <div class="design_content_block">
          <div class="design_content_block_card">
            <p class="design_content_text">
              {{ $interier_design->{'meta_description_' . app()->getLocale()}  }}
            </p>
          </div>
          <a href="{{ route('interier_design.show', ['locale' => app()->getLocale(), 'slug' => $interier_design->{'slug_' . app()->getLocale()}]) }}" class="interier_more lang" key="more">{{ __('app.more') }}</a>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!-- </div> -->
</div>


<script>
  new fullpage("#fullpage", {

    sectionSelector: '.vertical-scrolling',
    //   navigation: true,
    parallax: true,
  });
</script>
<!-- old verison -->

@endsection