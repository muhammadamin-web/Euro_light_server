@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">{{ __('Создать категорию') }}</h2>

            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name (Russian) -->
                <div class="form-group">
                    <label for="name_ru">{{ __('Имя (рус.)') }}</label>
                    <input id="name_ru" type="text" class="form-control @error('name_ru') is-invalid @enderror" name="name_ru" value="{{ old('name_ru') }}" required autocomplete="name_ru" autofocus>
                    @error('name_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Name (Uzbek) -->
                <div class="form-group">
                    <label for="name_uz">{{ __('Имя (узбекское)') }}</label>
                    <input id="name_uz" type="text" class="form-control @error('name_uz') is-invalid @enderror" name="name_uz" value="{{ old('name_uz') }}" required autocomplete="name_uz">
                    @error('name_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Description (Russian) -->
                <div class="form-group">
                    <label for="meta_description_ru">{{ __('Мета описание (рус.)') }}</label>
                    <textarea class="form-control @error('meta_description_ru') is-invalid @enderror" name="meta_description_ru" required>{{ old('meta_description_ru') }}</textarea>
                    @error('meta_description_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Meta Description (Uzbek) -->
                <div class="form-group">
                    <label for="meta_description_uz">{{ __('Мета описание (узбекское)') }}</label>
                    <textarea class="form-control @error('meta_description_uz') is-invalid @enderror" name="meta_description_uz" required>{{ old('meta_description_uz') }}</textarea>
                    @error('meta_description_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Tags (Russian) -->
                <div class="form-group">
                    <label for="tags_ru">{{ __('Теги (рус.)') }}</label>
                    <input id="tags_ru" type="text" class="form-control @error('tags_ru') is-invalid @enderror" name="tags_ru" value="{{ old('tags_ru') }}">
                    @error('tags_ru')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Tags (Uzbek) -->
                <div class="form-group">
                    <label for="tags_uz">{{ __('Теги (узбекское)') }}</label>
                    <input id="tags_uz" type="text" class="form-control @error('tags_uz') is-invalid @enderror" name="tags_uz" value="{{ old('tags_uz') }}">
                    @error('tags_uz')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="form-group">
                    <label for="image_path">{{ __('Image') }}</label>
                    <input id="image_path" type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path" accept="image/*">
                    @error('image_path')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="form-group mb-0">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                            {{ __('Cancel') }}
                        </a>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection