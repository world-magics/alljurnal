@extends('dashboard.layout.main')
@section('content')
@if (session('status'))
<div class="alert alert-warning">
    {{ session('status') }}
</div>
@endif
<div class="card">
<div class="card-body">
<h5 class="card-title">Yangi foydalanuvchi yaratish</h5>

<!-- General Form Elements -->
<form id="form-role" method="post" action="{{ route('admin.users.store') }}">
    @csrf
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label required">Foydalanuvchi nomi</label>
        <div class="col-sm-10">
            <input name="name" type="text" class="form-control" value="{{old("name")}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label required">Foydalanuvchi logini</label>
        <div class="col-sm-10">
            <input name="username" type="text" class="form-control" value="{{old("username")}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label required">E-mail</label>
        <div class="col-sm-10">
            <input name="email" type="email" class="form-control" value="{{old("email")}}">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label required">Parol</label>
        <div class="col-sm-10">
            <input name="password" type="password" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <label for="inputText" class="col-sm-2 col-form-label required">Parolni takrorlang</label>
        <div class="col-sm-10">
            <input name="password_confirmation" type="password" class="form-control">
        </div>
    </div>
    <div class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0 required">Foydalanuvchi huquqlari</legend>
        <div class="col-sm-10">
            @foreach($roles as $role)
                <div class="form-check">
                    <input
                        name="roles[{{$role->id}}]"
                        class="form-check-input"
                        type="checkbox"
                        id="role_{{$role->id}}"
                    >
                    <label class="form-check-label" for="role_{{$role->id}}">
                        {{$role->name}}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route("admin.users.index")}}" class="btn btn-secondary" type="submit">Ortga</a>
        <input class="btn btn-success" type="submit" value="Saqlash">
    </div>
</form><!-- End General Form Elements -->

</div>
</div>
@endsection