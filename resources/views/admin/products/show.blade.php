@extends('admin.layouts.app')

@section('content')

<div class="product_show" style="margin-top: 0;">
    
    <h2 class="product_show_title"><p>{{ $product->category->name_ru }}</p>/<p>{{ $product->name_ru }}</p></h2>
    <img src="{{ asset($product->image_path) }}" alt="" class="product_show_img">
  </div>
@endsection
