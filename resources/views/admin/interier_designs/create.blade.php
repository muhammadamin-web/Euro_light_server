@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Создать дизайн интерьера') }}</h2>

            <form method="POST" action="{{ route('interier_designs.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name (Russian) -->
                <div class="form-group">
                    <label for="name_ru">{{ __('Название (русский)') }}</label>
                    <input id="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru') }}" required autocomplete="name_ru" autofocus>
                    @error('name_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Name (Uzbek) -->
                <div class="form-group">
                    <label for="name_uz">{{ __('Название (узбекский)') }}</label>
                    <input id="name_uz" type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ old('name_uz') }}" required autocomplete="name_uz">
                    @error('name_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Russian) -->
                <div class="form-group">
                    <label for="description_ru">{{ __('Описание (русский)') }}</label>
                    <textarea id="description_ru" class="form-control @error('description_ru') is-invalid @enderror" name="description_ru">{{ old('description_ru') }}</textarea>
                    @error('description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Uzbek) -->
                <div class="form-group">
                    <label for="description_uz">{{ __('Описание (узбекский)') }}</label>
                    <textarea id="description_uz" class="form-control @error('description_uz') is-invalid @enderror" name="description_uz">{{ old('description_uz') }}</textarea>
                    @error('description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <!-- Meta Description (Russian) -->
                <div class="form-group">
                    <label for="meta_description_ru">{{ __('Мета описание (русский)') }}</label>
                    <textarea id="meta_description_ru" class="form-control @error('meta_description_ru') is-invalid @enderror" name="meta_description_ru" required>{{ old('meta_description_ru') }}</textarea>
                    @error('meta_description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Meta Description (Uzbek) -->
                <div class="form-group">
                    <label for="meta_description_uz">{{ __('Мета описание (узбекский)') }}</label>
                    <textarea id="meta_description_uz" class="form-control @error('meta_description_uz') is-invalid @enderror" name="meta_description_uz" required>{{ old('meta_description_uz') }}</textarea>
                    @error('meta_description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <!-- Tags (Russian) -->
                <div class="form-group">
                    <label for="tags_ru">{{ __('Теги (русский)') }}</label>
                    <input id="tags_ru" type="text" class="form-control @error('tags_ru') is-invalid @enderror" name="tags_ru" value="{{ old('tags_ru') }}">
                    @error('tags_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Tags (Uzbek) -->
                <div class="form-group">
                    <label for="tags_uz">{{ __('Теги (узбекский)') }}</label>
                    <input id="tags_uz" type="text" class="form-control @error('tags_uz') is-invalid @enderror" name="tags_uz" value="{{ old('tags_uz') }}">
                    @error('tags_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Qolgan maydonlar shu yerda -->

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image_path">{{ __('Изображение') }}</label>
                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                    @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Submit Button -->
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Создать') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection