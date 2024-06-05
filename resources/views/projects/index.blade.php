@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>Euro Light - {{ __('app.projects') }}</title>
<link rel="stylesheet" href="{{ asset('css/project.css') }}">

@endsection
@section('content')

<div class="projects" id="projects">
    <h2 class=" lang" key="projects">{{ __('app.projects') }}</h2>

    <div class="big">
        <?php $counter = 1; ?>
        <?php foreach ($projects as $project) : ?>

            <a href="{{ route('project.show', ['locale' => app()->getLocale(), 'slug' => $project->{'slug_' . app()->getLocale()}]) }}" class="img-wrapper_container">
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
@endsection