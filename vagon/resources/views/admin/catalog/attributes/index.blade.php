@extends('admin')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row card-control-header">
                <div class="col-md-10">
                    <h3>Список атрибутов</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.catalog.attributes.create') }}" class="btn btn-primary float-right">Добавить</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Название</th>
                            <th>Код</th>
                            <th>Тип</th>
                            <th>Управление</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($attributes as $attribute)
                            <tr>
                                <td>{{ $attribute->title }}</td>
                                <td>{{ $attribute->code }}</td>
                                <td>{{ $attribute->type }}</td>
                                <td>
                                    <div class="control-container">
                                        <a href="{{ route('admin.catalog.attributes.edit', $attribute) }}">
                                            <i class="ti-pencil-alt"></i>
                                            Редактировать
                                        </a>
                                        @if($attribute['is_user_defined'])
                                            <form action="{{ route('admin.catalog.attributes.destroy', $attribute) }}" method="POST">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button><i class="ti-trash"></i> Удалить</button>
                                            </form>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        {{ $attributes->links() }}
    </div>
@endsection
