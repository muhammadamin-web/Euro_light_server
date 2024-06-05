@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Создать продукт') }}</h2>
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name (Russian) -->
                <div class="form-group ">
                    <label for="name_ru">{{ __('Имя (рус.)') }}</label>
                    <input id="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru') }}" required autocomplete="name_ru" autofocus>
                    @error('name_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Name (Uzbek) -->
                <div class="form-group ">
                    <label for="name_uz">{{ __('Имя (узбекское)') }}</label>

                    <input id="name_uz" type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ old('name_uz') }}" required autocomplete="name_uz">
                    @error('name_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Russian) -->
                <div class="form-group ">
                    <label for="description_ru">{{ __('Описание (рус.)') }}</label>

                    <textarea id="description_ru" class="form-control @error('description_ru') is-invalid @enderror" name="description_ru" >{{ old('description_ru') }}</textarea>
                    @error('description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <!-- Description (Uzbek) -->
                <div class="form-group ">
                    <label for="description_uz">{{ __('Описание (узбекское)') }}</label>
                    <textarea id="description_uz" class="form-control @error('description_uz') is-invalid @enderror" name="description_uz" >{{ old('description_uz') }}</textarea>
                    @error('description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Tags (Russian) -->
                <div class="form-group ">
                    <label for="tags_ru">{{ __('Теги (рус.)') }}</label>
                    <input id="tags_ru" type="text" class="form-control @error('tags_ru') is-invalid @enderror" name="tags_ru" value="{{ old('tags_ru') }}" required>
                    @error('tags_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Tags (Uzbek) -->
                <div class="form-group ">
                    <label for="tags_uz">{{ __('Теги (узбекское)') }}</label>
                    <input id="tags_uz" type="text" class="form-control @error('tags_uz') is-invalid @enderror" name="tags_uz" value="{{ old('tags_uz') }}" required>
                    @error('tags_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Description (Russian) -->
                <div class="form-group ">
                    <label for="meta_description_ru">{{ __('Мета описание (рус.)') }}</label>
                    <textarea id="meta_description_ru" class="form-control @error('meta_description_ru') is-invalid @enderror" name="meta_description_ru" required>{{ old('meta_description_ru') }}</textarea>
                    @error('meta_description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Description (Uzbek) -->
                <div class="form-group ">
                    <label for="meta_description_uz">{{ __('Мета описание (узбекское)') }}</label>
                    <textarea id="meta_description_uz" class="form-control @error('meta_description_uz') is-invalid @enderror" name="meta_description_uz" required>{{ old('meta_description_uz') }}</textarea>
                    @error('meta_description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Category Select -->
                <div class="form-group ">
                    <label for="category_id">{{ __('Категория') }}</label>
                    <select id="category_id" class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                        <option value="">{{ __('Выберите категорию') }}</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_ru }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="form-group ">
                    <label for="image_path">{{ __('Image') }}</label>
                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                    @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group  mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Create') }}
                    </button>
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">
                        {{ __('Cancel') }}
                    </a>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection