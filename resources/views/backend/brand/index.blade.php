@extends('layouts.admin')
@section('title', 'Brand')
@section('content')
    <div>

        <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ THƯƠNG HIỆU</strong>
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

                                            <a class="btn btn-sm btn-danger" href="{{ route('admin.brand.trash') }}">
                                               </i> Thùng rác</a>
                                </div>

                                <div class="col-md-6 text-right">
                                    <button class="btn btn-sm btn-primary" type="submit" name="THEM">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Thêm Thương Hiệu
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">



                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Tên thương hiệu (*)</label>
                                        <input type="text" name="name" placeholder="Nhập name"
                                            value="{{ old('name') }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" placeholder="Nhập slug" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mô tả</label>
                                        <textarea name="description" placeholder="Nhập mô  tả" class="form-control" value="{{ old('description') }}"></textarea>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Sắp Xếp</label>
                                        <select name="sort_order" class="form-control">
                                            <option value="1">1</option>
                                            {!! $htmlsortorder !!}

                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Hình đại diện</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Trạng thái</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Xuất bản</option>
                                            <option value="2">Chưa xuất bản</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center  bg-dark" style="width:30px;">
                                                    <input type="checkbox">
                                                </th>
                                                <th class="text-center bg-dark" style="width:130px;">Hình ảnh</th>
                                                <th class="text-center bg-dark">Tên thương hiệu</th>
                                                <th class="text-center bg-dark">Tên slug</th>
                                                <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                                                <th class="text-center bg-dark" style="width:30px">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list as $row)
                                                @php
                                                    $args = ['id' => $row->id];
                                                @endphp
                                                <tr>
                                                    <td class="text-center">
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ asset('img/brands/' . $row->image) }}"
                                                            class="img-fluid" alt="{{ $row->image }}">
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $row->name }} </td>
                                                    <td class="text-center"> {{ $row->slug }}</td>
                                                    <td class="text-center">
                                                        @if ($row->status == 2)
                                                            <a href="{{ route('admin.brand.status', $args) }}"
                                                                class="btn btn-sm btn-dark">
                                                                <i class="fas fa-toggle-off"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('admin.brand.status', $args) }}"
                                                                class="btn btn-sm btn-success">
                                                                <i class="fas fa-toggle-on"></i>
                                                            </a>
                                                        @endif
                                                        <a href="{{ route('admin.brand.show', $args) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.brand.edit', $args) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.brand.delete', $args) }}"
                                                            class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    <td class="text-center"> {{ $row->id }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
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
    <link rel="stylesheet" href="home.css">
@endsection
