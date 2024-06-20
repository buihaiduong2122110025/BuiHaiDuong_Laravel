@extends('layouts.admin')
@section('title', 'Banner')
@section('content')
    <div>
        <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- CONTENT -->
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ BANNER</strong>
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

                                    <a href="{{ route('admin.banner.trash') }}" class="btn btn-danger btn-sm"> <i
                                            class="fas fa-trash"></i> Thùng rác</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-sm btn-primary" type="submit" name="THEM">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Thêm Banner
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="">
                                            <div class="mb-3">
                                                <label>Tên banner </label>
                                                <input type="text" name="name" placeholder="nhập name"
                                                    class="form-control" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label>Liên kết</label>
                                                <input type="text" placeholder="nhập liên kết" name="link"
                                                    class='form-control'>
                                            </div>
                                            <div class="col mb-3">
                                                <label>Sắp xếp</label>
                                                <select name="sort_order" class="form-control">
                                                    <option value="1">Chọn vị trí</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="mb-3">
                                                <label>Hình đại diện</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label>Vị trí</label>
                                                <select name="position" class="form-control">
                                                    <option value="slidershow">slider show </option>
                                                    <option value="slidershow2">slider show 2</option>
                                                    <option value="slidershow3">slider show 3</option>

                                                </select>
                                            </div>

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
                                <div class="col-md-9">

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center bg-dark" style="width:30px;">
                                                    <input type="checkbox">
                                                </th>
                                                <th class="text-center bg-dark" style="width:450px;   ">Hình ảnh</th>
                                                <th class="text-center bg-dark">Tên Banner</th>
                                                <th class="text-center bg-dark">Tên liên kết</th>
                                                <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                                                <th class="text-center bg-dark" style="width:30px">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $row)
                                                @php
                                                    $args =  ['id' => $row->id];
                                                    @endphp
                                                <tr>
                                                    <td class="text-center">
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td class="text-center">
                                                        <img style="height:200px;"
                                                            src="{{ asset('img/banners/' . $row->image) }}"
                                                            class="img-fluid" alt="{{ $row->image }} ">
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $row->name }}
                                                    </td>
                                                    <td class="text-center"> {{ $row->link }}</td>
                                                    <td class="text-center">

                                                        @if ($row->status == 2)
                                                            <a href="{{ route('admin.banner.status', $args) }}"
                                                                class="btn btn-sm btn-dark">
                                                                <i class="fas fa-toggle-off"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('admin.banner.status', $args) }}"
                                                                class="btn btn-sm btn-success">
                                                                <i class="fas fa-toggle-on"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{ route('admin.banner.show', $args) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.banner.edit', $args) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.banner.delete', $args) }}"
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
                        </div>
                </section>
            </div>
        </form>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection
