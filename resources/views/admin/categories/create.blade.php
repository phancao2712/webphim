@extends('admin.master')
@section('contents')
    <h2 class="title1">Danh Mục</h2>
    <div class="form-grids row widget-shadow" data-example-id="basic-forms">
        <div class="form-title">
            <h4>Tạo danh mục</h4>
        </div>
        <div class="form-body">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chú thích</label>
                    <textarea name="description" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-default">Thêm</button>
            </form>
        </div>
    </div>
@endsection
