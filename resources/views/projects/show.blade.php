@extends('layouts.app')
@section('meta')
<meta name="keywords" content="{{ $project->{'tags_' . app()->getLocale()} }},люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="{{ $project->{'meta_description_' . app()->getLocale()} }}">
<meta property="og:title" content="{{ $project->{'name_' . app()->getLocale()} }}">
<meta property="og:description" content="{{ $project->{'meta_description_' . app()->getLocale()} }}">
<title>Euro Light - {{ $project->{'name_' . app()->getLocale()}  }}</title>
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<link rel="stylesheet" href="{{ asset('css/interier_detail.css') }}">

@endsection
@section('content')
<!-- <div class="container">
    <h2>{{ __('Project Details') }}</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $project->{'name_' . app()->getLocale()} }}</h5>
            @if($project->image_path)
                <img src="{{ asset($project->image_path) }}" alt="{{ $project->image_name }}" class="img-fluid">
            @endif
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-3">{{ __('Back to Projects') }}</a>
</div> -->
<div class="interier_detail">
    <div class="interier_detail_container">
        <h1 class="interier_detail_title">{{ $project->{'name_' . app()->getLocale()}  }}</h1>
    </div>
    <div class="show_image_container">

        <img src="{{ asset($project->image_path) }}" alt="" class="interier_detail_img">
    </div>
    <p class="image_alt">{{ $project->{'meta_description_' . app()->getLocale()} }}</p>

    <div class="interier_detail_description">
        <p>{!! $project->{'description_' . app()->getLocale()} !!}</p>
    </div>
</div>
@endsection