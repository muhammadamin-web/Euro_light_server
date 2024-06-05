@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Дизайн интерьера') }}</div>

                <div class="card-body">
                    <!-- Name (Russian) -->
                    <div class="form-group">
                        <label>{{ __('Название (русский)') }}</label>
                        <p>{{ $Interier_design->name_ru }}</p>
                    </div>

                    <!-- Name (Uzbek) -->
                    <div class="form-group">
                        <label>{{ __('Название (узбекский)') }}</label>
                        <p>{{ $Interier_design->name_uz }}</p>
                    </div>

                    <!-- Description (Russian) -->
                    <div class="form-group">
                        <label>{{ __('Описание (русский)') }}</label>
                        <p>{!! $Interier_design->description_ru !!}</p>
                    </div>

                    <!-- Description (Uzbek) -->
                    <div class="form-group">
                        <label>{{ __('Описание (узбекский)') }}</label>
                        <p>{!! $Interier_design->description_uz !!}</p>
                    </div>

                    <!-- Image -->
                    @if($Interier_design->image_path)
                        <div class="form-group">
                            <label>{{ __('Изображение') }}</label>
                            <div>
                                <img src="{{ asset($Interier_design->image_path) }}" alt="{{ $Interier_design->name_ru }}" class="img-fluid">
                            </div>
                        </div>
                    @endif

                    <!-- Tags (Russian) -->
                    <div class="form-group">
                        <label>{{ __('Теги (русский)') }}</label>
                        <p>{{ $Interier_design->tags_ru }}</p>
                    </div>

                    <!-- Tags (Uzbek) -->
                    <div class="form-group">
                        <label>{{ __('Теги (узбекский)') }}</label>
                        <p>{{ $Interier_design->tags_uz }}</p>
                    </div>

                    <a href="{{ route('interier_designs.index') }}" class="btn btn-secondary">{{ __('Назад к списку') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
