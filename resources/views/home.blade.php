@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>{{ __('app.site_meta_name') }}</title>
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<script src="{{ asset('js/scripts.js') }}" defer></script>

@endsection
@section('content')
<div id="home" style="position: absolute; top: -200px;"></div>
<div class="img-slider">
    <div class="slide active">
        <img src="{{ asset('images/static_img/bacround_slider5.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('images/static_img/bacround_slider11.png') }}" alt="">
    </div>
    <div class="slide">
        <img src="{{ asset('images/static_img/backround_11.jpg') }}" alt="">
    </div>
    <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
    </div>
</div>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- <img src="{{ asset('images/static_img/3.jpg') }}" alt=""> -->



<div class="about" id="about">
    <div class="container">
        <div class="about_block">
            <div class="about_content">
                <h1 class="about_title lang" key="about_title">{{ __('app.about_title') }}</h1>
                <div class="about_content_text">
                    <p class="lang" key="about_text1">{{ __('app.about_text1') }}</p>
                </div>
                <div class="about_content_text">
                    <p class="lang" key="about_text2">{{ __('app.about_text2') }}</p>
                </div>
            </div>
            <div class="about_img">
                <img src="{{ asset('images/static_img/about_img_12.png') }}" alt="">
            </div>
        </div>
    </div>
</div>



<div class="projects" id="projects">
    <h2 class=" lang" key="projects">{{ __('app.projects') }}</h2>

    <div class="big">
        <?php $counter = 1; ?>
        <?php foreach ($projects as $project) : ?>

            <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'slug' => $project->{'slug_' . app()->getLocale()}]) }}" class="img-wrapper_container<?= $counter; ?>">
                <div class="img-wrapper">
                    <img id="" class="inner-img" src="{{ asset($project->image_path) }}" />
                    <div class="middle">
                        <div class="text lang" key="projects">{{ $project->{'name_' . app()->getLocale()} }}</div>
                        <!-- <p class="more lang" key="more">{{ __('app.more') }}</p> -->
                    </div>
                </div>
            </a>

            <?php $counter++; ?>
        <?php endforeach; ?>
    </div>
</div>







<div class="products" id="products">
    <h2 class="lang" key="products_category">{{ __('app.products') }}</h2>



    <div class="products_container">

        @foreach($categories as $category)

        <a href="{{ route('category.show', ['locale' => app()->getLocale(), 'slug' => $category->{'slug_' . app()->getLocale()}]) }}" class="product_card">

            <div class="product_img_wrapper">
                <img class="product_inner-img" src="{{ asset($category->image_path) }}" />
                <div class="product_middle">
                    <div class="product_text lang" key="products1">{{ $category->{'name_' . app()->getLocale()} }}</div>
                </div>
            </div>
        </a>
        @endforeach

    </div>

    
</div>

@endsection