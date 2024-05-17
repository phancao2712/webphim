@extends('admin.master')
@section('contents')
    <div class="row wrapper border-bottom white-bg page-heading" style="margin-bottom: 20px;">
        <div class="col-lg-10">
            <h2>Categories</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}">Categoriess</a>
                </li>
                <li class="active">
                    <strong>Update category</strong>
                </li>
            </ol>
        </div>
    </div>

    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Update categoy</h5>
        </div>
        <div class="ibox-content">
            <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="form-horizontal">
                @csrf
                @method('PUT')
                <div class="form-group"><label class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-10"><input type="text" value="{{ old('name', $category->name) }}" name="name" class="form-control">
                        <x-input-error :messages="$errors->get('name')" class="error" />
                    </div>

                </div>
                <div class="form-group"><label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" id="editor" cols="30" rows="10">{!! $category->description !!}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="error" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.1/classic/ckeditor.js"></script>
@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
