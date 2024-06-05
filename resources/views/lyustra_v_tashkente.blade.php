@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>Euro Light - {{ __('app.lyustra_v_tashkente') }}</title>
<link rel="stylesheet" href="{{ asset('css/lyustra_v_tashkente.css') }}">
<script src="{{ asset('js/scripts.js') }}" defer></script>

@endsection
@section('content')
<div class="lyusta">
        <div class="lyusta_container">
            <h1 class="lyusta_title lang" key="contact">{{ __('app.contact') }}</h1>
            <div class="lyusta_contact">
                <div class="contact_contents">
                    <h5 class="contact_contents_text lang" key="job_time">{{ __('app.job_time') }}</h5>
                    <h5 class="contact_contents_text lang" key="location">
                    {{ __('app.location') }}
                    </h5>
                    <div class="contact_buttons">
                    <a href="https://t.me/euro_light" class="contact_button lang" key="telegram">TELEGRAM</a>
                    <a href="https://www.instagram.com/lyustra_eurolight/" class="contact_button lang" key="instagram">INSTAGRAM</a>
                    <a href="tel:+998998968885" class="contact_button">+998 99 896 88 85</a>
                </div>
                </div>
                <div class="lyusta_contact_map">
                    <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11989.476676900707!2d69.3463914!3d41.3008319!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef56874c7ab03%3A0x3786d6a39e1ab58f!2zRXVybyBMaWdodCAtINCf0YDQvtC40LfQstC-0LTRgdGC0LLQviDQu9GO0YHRgtGA0YssINCc0LDQs9Cw0LfQuNC9INCb0Y7RgdGC0YDRiw!5e0!3m2!1sru!2s!4v1701682170101!5m2!1sru!2s"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
