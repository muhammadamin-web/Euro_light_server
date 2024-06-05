@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>{{ __('Список проектов') }}</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-primary" style="float: right; margin-bottom:20px;">{{ __('Add New Project') }}</a>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>{{ __('Название RU') }}</th>
                <th>{{ __('Название УЗ') }}</th>
                <th>img</th>
                <th>{{ __('Действия') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->name_ru }}</td>
                <td>{{ $project->name_uz }}</td>
                <td> <img src="{{ asset($project->image_path) }}" alt="{{ $project->image_name }}" class="img-fluid" width="50"></td>
                <td>
                    <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-info">{{ __('Показывать') }}</a>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-sm btn-warning">{{ __('Редактировать') }}</a>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">{{ __('Удалить') }}</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
