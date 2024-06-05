@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Изменить проект') }}</h2>
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name_ru">{{ __('Название RU') }}</label>
            <input type="text" class="form-control" id="name_ru" name="name_ru" value="{{ $project->name_ru }}" required>
        </div>
        <div class="form-group">
            <label for="name_uz">{{ __('Название УЗ') }}</label>
            <input type="text" class="form-control" id="name_uz" name="name_uz" value="{{ $project->name_uz }}" required>
        </div>
        <!-- Description (Russian) -->
        <div class="form-group">
            <label for="description_ru">{{ __('Описание (рус.)') }}</label>
            <textarea id="description_ru" class="form-control @error('description_ru') is-invalid @enderror" name="description_ru">{{ old('description_ru', $project->description_ru) }}</textarea>
            @error('description_ru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <!-- Description (Uzbek) -->
        <div class="form-group">
            <label for="description_uz">{{ __('Описание (узбекское)') }}</label>
            <textarea id="description_uz" class="form-control @error('description_uz') is-invalid @enderror" name="description_uz">{{ old('description_uz', $project->description_uz) }}</textarea>
            @error('description_uz')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <!-- Tags (Russian) -->
        <div class="form-group">
            <label for="tags_ru">{{ __('Теги (рус.)') }}</label>
            <input id="tags_ru" type="text" class="form-control @error('tags_ru') is-invalid @enderror" name="tags_ru" value="{{ old('tags_ru', $project->tags_ru) }}">
            @error('tags_ru')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <!-- Tags (Uzbek) -->
        <div class="form-group">
            <label for="tags_uz">{{ __('Теги (узбекское)') }}</label>
            <input id="tags_uz" type="text" class="form-control @error('tags_uz') is-invalid @enderror" name="tags_uz" value="{{ old('tags_uz', $project->tags_uz) }}">
            @error('tags_uz')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="form-group">
                    <label for="image_path">{{ __('Изображение') }}</label>
                    @if($project->image_path)
                    <img src="{{ asset($project->image_path) }}" alt="{{ $project->name }}" width="100" class="mb-2">
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
                </div>    </form>
</div>
@endsection