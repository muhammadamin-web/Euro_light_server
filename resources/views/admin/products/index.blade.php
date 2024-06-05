@extends('admin.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Продукты') }}
                <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary float-right">{{ __('Создать продукты') }}</a>

                </div>
                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Имя') }}</th>
                            <th>{{ __('Категория') }}</th>
                            <th>{{ __('Изображение') }}</th>
                            <th>{{ __('Действия') }}</th>

                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name_uz }}</td>
                                <td>{{ $product->category->name_uz }}</td>
                                <td>
                                    @if($product->image_path)
                                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name_uz }}" width="50">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-primary">{{ __('Редактировать') }}</a>
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-primary">Показывать</a>
                                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display:inline;">
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
