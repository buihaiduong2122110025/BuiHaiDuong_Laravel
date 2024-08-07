@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
    <div>

        <form action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">THÊM THÀNH VIÊN MỚI</strong>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content">
                    <div class="card">
                        <div class="card-header text-right">
                            <a href="{{ route('admin.user.index') }}" class="btn btn-sm btn-info">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Về danh sách
                            </a>
                            <button class="btn btn-sm btn-primary" type="submit" name="THEM">
                                <i class="fa fa-save" aria-hidden="true"></i>
                                Thêm thành viên
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="mb-3">
                                        <label>Họ tên (*)</label>
                                        <input type="text" placeholder="Nhập tên name" name="name"
                                            class="form-control" value="{{ old('name') }}">

                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Điện thoại</label>
                                        <input type="text" name="phone" placeholder="nhập số điện thoại"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="nhập email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Tên đăng nhập</label>
                                        <input type="text" name="username" placeholder="nhập tên đăng nhập"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mật khẩu</label>
                                        <input type="password" name="password"
                                            placeholder="nhập mật khẩu"class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="password" name="password_re"
                                            placeholder="nhập lại mật khẩu"class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Địa Chỉ</label>
                                        <input type="address" name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label>Hình đại diện</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <label>Quyền </label>
                                    <select name="roles" class="form-control">
                                        <option value="1"> Admin</option>
                                        <option value="2"> Custommer</option>
                                    </select>
                                    <label>Giới tính</label>   
                                    <select name="gender" class="form-control">
                                        <option value="1"> Nam</option>
                                        <option value="2"> Nữ</option>
                                    </select>
                                    <div class="mb-3">
                                        <label>Trạng thái</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Xuất bản</option>
                                            <option value="2">Chưa xuất bản</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
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
