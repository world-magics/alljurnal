@extends('dashboard.layout.main')
@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Barcha foydalanuvchilar ro'yxati</h5>
            <div class="dataTable-wrapper dataTable-loading sortable searchable fixed-columns">
                <div class="dataTable-container">

                    <!-- Table with hoverable rows -->
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Foydalanuvchi nomi</th>
                            <th scope="col">Foydalanuvchi roli</th>
                            <th scope="col">Jarayon</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                               <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>
                                    @foreach($user->roles as $role)
                                        <span class="badge text-primary">{{$role->name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($role->permissions as $permission)
                                        <span class="badge text-primary">{{$permission->name}}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route("admin.users.edit", $user->id)}}"><i class="bx bxs-edit"></i></a>
                                    <a href="{{route("admin.users.delete", $user->id)}}"><i class="bx bxs-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with hoverable rows -->
                </div>
                <div class="dataTable-bottom">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route("admin.users.create")}}" class="btn btn-primary" type="button">Yangi foydalanuvchi qo'shish</a>
                    </div>
                </div>
            </div>
            <!-- End Table with stripped rows -->
        </div>
    </div>
@endsection