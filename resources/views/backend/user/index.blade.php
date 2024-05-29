@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
    <div>

        <form action="index.php?option=user&cat=process" method="post" enctype="multipart/form-data">

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ THÀNH VIÊN</strong>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="card">
                        <div class="card-header ">
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm"> <i
                                            class="fas fa"></i>Tất Cả</a>

                                    <a href="index.php?option=user&cat=trash" class="btn btn-danger btn-sm"> <i
                                            class="fas fa-trash"></i> Thùng rác</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <a href="index.php?option=user&cat=create" class="btn btn-sm btn-primary">Thêm thành
                                        viên</a>

                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center bg-dark" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center bg-dark" style="width:100px;">Hình ảnh</th>
                                        <th class="text-center bg-dark">Tên người dùng</th>
                                        <th class="text-center bg-dark">Điện thoại</th>
                                        <th class="text-center bg-dark">Email</th>
                                        <th class="text-center bg-dark">Roles</th>
                                        <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                                        <th class="text-center bg-dark" style="width:30px">ID</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list as $row)
                                        <tr>
                                            <td class="text-center">
                                                <input type="checkbox" />
                                            </td>
                                            <td class="text-center">
                                                <img src="{{ asset('img/users/' . $row->image) }}"  style="width:50px;"
                                                    class="img-fluid"alt="{{ $row->image }}">
                                            </td>
                                            <td class="text-center">{{ $row->name }}</td>
                                            <td class="text-center"> {{ $row->phone }}</td>
                                            <td class="text-center">{{ $row->email }}</td>
                                            <td class="text-center">{{ $row->roles }}</td>

                                            <td class="text-center">
                                                {{-- <a href="{{ route('admin.topic.status', ['id' => $row->id]) }}" class="btn btn-sm btn-dark">
                                            <i class="fas fa-toggle-off"></i>
                                         </a> --}}
                                                <a href="{{ route('admin.topic.status', ['id' => $row->id]) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i>
                                                </a>
                                                <a href="{{ route('admin.user.show', ['id' => $row->id]) }}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.user.edit', ['id' => $row->id]) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.user.delete', ['id' => $row->id]) }}"
                                                    class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            <td class="text-center">{{ $row->id }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </form>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection
