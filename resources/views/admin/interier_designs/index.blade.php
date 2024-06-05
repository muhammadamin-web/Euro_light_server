@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Дизайн интерьера') }}
                <a href="{{ route('interier_designs.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Создать дизайн интерьера') }}</a>

                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th>{{ __('Название RU') }}</th>
                <th>{{ __('Название УЗ') }}</th>
                            <th>{{ __('Изображение') }}</th>
                            <th>{{ __('Действия') }}</th>

                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($designs as $interier_design)
                            <tr>
                                <td>{{ $interier_design->name_uz }}</td>
                                <td>{{ $interier_design->name_uz }}</td>
                                <td>
                                    @if($interier_design->image_path)
                                    <img src="{{ asset($interier_design->image_path) }}" alt="{{ $interier_design->name_uz }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('interier_designs.edit', $interier_design->id) }}" class="btn btn-sm btn-primary">{{ __('Редактировать') }}</a>
                                    <a href="{{ route('interier_designs.show', $interier_design->id) }}" class="btn btn-sm btn-primary">Показывать</a>
                                    <form method="POST" action="{{ route('interier_designs.destroy', $interier_design->id) }}" style="display:inline;">
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
            </div>
        </div>
    </div>
</div>
@endsection
