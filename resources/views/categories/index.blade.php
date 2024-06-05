@extends('layouts.app')
@section('meta')
<meta name="keywords" content="люстра в ташкенте, qandillar, свечи, qandillar do'koni, свечной магазин, qandillar narxi, цена на свечи, qandillar xususiyatlari, свечи особенности, qandillar turlari, виды свечей, qandillar qanday ishlatiladi, как использовать свечи, qandillar qanday tozalaydi, как очистить свечи, qandillar va salomatlik, свечи и здоровье, qandillar va madaniyat, свечи и культура, qandillar va san'at, свечи и искусство, qandillar va hayvonlar, свечи и животные, qandillar va yodgorlik, свечи и память, qandillar sotib olish, купить свечи, qandillar hisobi, расчет свечей">
<meta name="description" content="люстра в ташкенте. Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<meta property="og:title" content="Qandillar - eng yaxshi va sifatli qandillar">
<meta property="og:description" content="Bizning qandillar do'konimizda eng yaxshi va sifatli qandillarni topishingiz mumkin. Bizning do'kondan oson va tez yoqtirib olishingiz mumkin">
<title>Euro Light - {{ __('app.categories') }}</title>
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
<style>
    @media (max-width: 680px){
    .products{
    padding-top: 100px !important;
}
    }
</style>
@endsection
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Categories') }}
                    <a href="{{ route('categories.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Create Category') }}</a>
                </div>

                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name_uz }}</td>

                                <td>
                                    @if($category->image_path)
                                    <img src="{{ asset($category->image_path) }}" alt="{{ $category->name_uz }}" width="50">
                                    @endif
                                </td>
                                <td>
                                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-primary">Show</a>
         
   
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="products" id="products">


    
    <div class="products_black product_page">
      <h2 class="lang" key="products_category">{{ __('app.categories') }}</h2>

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

  </div>
@endsection
