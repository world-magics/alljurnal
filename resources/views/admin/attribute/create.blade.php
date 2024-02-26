@extends('admin.layouts.app')
@section('content')
<div class="mb-5">
    <div class="float-start">
    </div>
    <div class="float-end">
        <button type="submit" form="form-attribute" class="btn btn-success "><i class="ri-save-3-line"></i></button>
        <button type="reset" form="form-attribute" class="btn btn-secondary "><i class="bx bx-reset"></i></button>
        <a href="{{ route('admin.attribute.index') }}" form="form-attribute" class="btn btn-light border bg-white"><i class="ri-reply-line"></i></a>
    </div>
</div>
@if (session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Yangi ustunlarni yaratish</h5>
        <!-- General Form Elements -->
        <form id="form-attribute" method="post" action="{{ route('admin.attribute.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="group" class="col-sm-2 col-form-label required">Ustun guruhini tanlang</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="group" name="group_id" required>
                        @foreach ($groups as $item)
                            <option value="{{ $item->id }}"> {{ $item->title }} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label required">Ustun nomi kiriting</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" value="{{old("name")}}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="category" class="col-sm-2 col-form-label required">Ustun turi tanlang</label>
                <div class="col-sm-10">
                    <select class="form-select" aria-label="Default select example" id="category" name="category_id" required>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}"> {{ $item->value }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form><!-- End General Form Elements -->
    </div>
</div>
@endsection