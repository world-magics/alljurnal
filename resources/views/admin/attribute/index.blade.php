@extends('admin.layouts.app')
@section('content')
<div class="mb-5">
    <div class="float-start">
    </div>
    <a href="{{ route('admin.attribute.create') }}" class="btn btn-success float-end"><i class="bi bi-plus-square-dotted"></i></a>
</div>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Jadvalning ustunlar ro'yxati</h5>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="align-middle">Id</th>
                    <th scope="col" class="align-middle">Ustunlar guruh nomi</th>
                    <th scope="col" class="align-middle">Ustun nomi</th>
                    <th scope="col" class="align-middle">Ustun turi</th>
                    <th scope="col" class="align-middle" width="5%">Jarayonlar</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($attributes as $item)
                    <tr>
                        <td class="align-middle">
                            {{ $item->id }}
                        </td>
                        <td class="align-middle">
                            {{ $item->group->title }}
                        </td>
                        <td class="align-middle">
                            {{ $item->name}}
                        </td>
                        <td class="align-middle">
                            {{ $item->category->value }}
                        </td>
                        <td>
                            <a href="{{ route('admin.attribute.edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route('admin.attribute.delete', ['id' => $item->id]) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Вы хотите удалить настройка?')">
                                <i class="ri-delete-bin-7-line"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Ro'yxat bo'sh</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <nav>
            {{ $attributes->links('pagination::bootstrap-4') }}
        </nav>
    </div>
</div>
@endsection