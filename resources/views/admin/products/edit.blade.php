@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Редактировать продукт') }}</h2>

            <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name (Russian) -->
                <div class="form-group">
                    <label for="name_ru">{{ __('Имя (рус.)') }}</label>
                    <input id="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru', $product->name_ru) }}" required autocomplete="name_ru" autofocus>
                    @error('name_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Name (Uzbek) -->
                <div class="form-group">
                    <label for="name_uz">{{ __('Имя (узбекское)') }}</label>
                    <input id="name_uz" type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ old('name_uz', $product->name_uz) }}" required autocomplete="name_uz">
                    @error('name_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Russian) -->
                <div class="form-group">
                    <label for="description_ru">{{ __('Описание (рус.)') }}</label>
                    <textarea id="description_ru" class="form-control @error('description_ru') is-invalid @enderror" name="description_ru">{{ old('description_ru', $product->description_ru) }}</textarea>
                    @error('description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Uzbek) -->
                <div class="form-group">
                    <label for="description_uz">{{ __('Описание (узбекское)') }}</label>
                    <textarea id="description_uz" class="form-control @error('description_uz') is-invalid @enderror" name="description_uz">{{ old('description_uz', $product->description_uz) }}</textarea>
                    @error('description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Tags (Russian) -->
                <div class="form-group">
                    <label for="tags_ru">{{ __('Теги (рус.)') }}</label>
                    <input id="tags_ru" type="text" class="form-control @error('tags_ru') is-invalid @enderror" name="tags_ru" value="{{ old('tags_ru', $product->tags_ru) }}">
                    @error('tags_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Tags (Uzbek) -->
                <div class="form-group">
                    <label for="tags_uz">{{ __('Теги (узбекское)') }}</label>
                    <input id="tags_uz" type="text" class="form-control @error('tags_uz') is-invalid @enderror" name="tags_uz" value="{{ old('tags_uz', $product->tags_uz) }}">
                    @error('tags_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Meta Description (Russian) -->
                <div class="form-group">
                    <label for="meta_description_ru">{{ __('Мета описание (рус.)') }}</label>
                    <textarea id="meta_description_ru" class="form-control @error('meta_description_ru') is-invalid @enderror" name="meta_description_ru">{{ old('meta_description_ru', $product->meta_description_ru) }}</textarea>
                    @error('meta_description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Meta Description (Uzbek) -->
                <div class="form-group">
                    <label for="meta_description_uz">{{ __('Мета описание (узбекское)') }}</label>
                    <textarea id="meta_description_uz" class="form-control @error('meta_description_uz') is-invalid @enderror" name="meta_description_uz">{{ old('meta_description_uz', $product->meta_description_uz) }}</textarea>
                    @error('meta_description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Category Select -->
                <div class="form-group">
                    <label for="category_id">{{ __('Категория') }}</label>
                    <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                        <option value="">{{ __('выберите категорию') }}</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name_ru }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image_path">{{ __('Изображение') }}</label>
                    @if($product->image_path)
                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" width="100" class="mb-2">
                    @endif
                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                    @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Обновлять') }}
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        {{ __('Отмена') }}
                    </a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection