@extends('admin.layouts.app')
@section('content')
<div class="mb-5">
    <div class="float-start">
    </div>
    <div class="float-end">
        <button type="submit" form="form-group" class="btn btn-success "><i class="ri-save-3-line"></i></button>
        <button type="reset" form="form-group" class="btn btn-secondary "><i class="bx bx-reset"></i></button>
        <a href="{{ route('admin.attribute-group.index') }}" form="form-group" class="btn btn-light border bg-white"><i class="ri-reply-line"></i></a>
    </div>
</div>
@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Yangi ustun guruhlarini yaratish</h5>
        <!-- General Form Elements -->
        <form id="form-group" method="post" action="{{ route('admin.attribute-group.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label required">Guruh nomi</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="{{old("name")}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="status" class="col-sm-2 col-form-label required">Holati</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="status" name="status" required>
                        <option value="1">активный</option>
                        <option value="0">не активен</option>
                    </select>
                </div>
            </div>
        </form><!-- End General Form Elements -->
    </div>
</div>
@endsection