@extends('admin.master')
@section('contents')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Categories</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li class="active">
                    <strong>Categories</strong>
                </li>
            </ol>
        </div>
    </div>
    <div class="ibox float-e-margins mt-5" style="margin-top: 30px">
        <div class="ibox-title">
            <a class="btn btn-w-m btn-primary" href="{{ route('admin.categories.create') }}"><i class="fa fa-plus"></i>
                Thêm</a>
            <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th style="width:10%">Status</th>
                        <th style="width:10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category?->name }}</td>
                            <td>{!! $category?->description !!}</td>
                            <td>
                                <input type="checkbox" @checked($category->status == 'active') value="{{ $category->id }}" class="js-switch change-status" />
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle" aria-expanded="false"><i class="fa fa-gear"></i><span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('admin.categories.edit', $category->id) }}">Edit</a></li>
                                        <li><a class="delete-btn" href="{{ route('admin.categories.destroy', $category->id) }}">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('.change-status').on('change', function (e) {
                e.preventDefault();
                id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "{{ route('admin.categories.changeStatus', ':id') }}".replace(':id',id),
                    success: function (response) {
                        window.location.reload();
                    },
                    error: function (xhr,error,status) {
                        console.log(error);
                    }
                });
            })
        });
    </script>
@endsection
