@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Детали проекта') }}</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ __('Название RU') }}: {{ $project->name_ru }}</h5>
            <h5 class="card-title">{{ __('Название УЗ') }}: {{ $project->name_uz }}</h5>
            @if($project->image_path)
                <img src="{{ asset($project->image_path) }}" alt="{{ $project->image_name }}" class="img-fluid">
            @endif
        </div>
    </div>
    <a href="{{ route('projects.index') }}" class="btn btn-primary mt-3">{{ __('Вернуться к проектам') }}</a>
</div>
@endsection
