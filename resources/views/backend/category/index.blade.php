@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
    <div>

        <form action="index.php?option=row&cat=process" method="post" enctype="multipart/form-data">
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ DANH MỤC</strong>
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

                                    <a href="index.php?option=row&cat=trash" class="btn btn-danger btn-sm"> <i
                                            class="fas fa-trash"></i> Thùng rác</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button class="btn btn-sm btn-primary" type="submit" name="THEM">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Thêm Danh Mục
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label>Tên danh mục (*)</label>
                                        <input type="text" name="name" id="name" placeholder="Nhập tên danh mục"
                                            class="form-control" onkeydown="handle_slug(this.value);">
                                    </div>
                                    <div class="mb-3">
                                        <label>Slug</label>
                                        <input type="text" name="slug" id="slug" placeholder="Nhập slug"
                                            class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Mô tả</label>
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label>Danh mục cha (*)</label>
                                        <select name="parent_id" class="form-control">
                                            <option value="0">none</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label>Sắp Xếp</label>
                                        <select name="sort_order" class="form-control">
                                            <option value="1">1</option>
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
                                                <th class="text-center  bg-dark" style="width:130px;">Hình ảnh</th>
                                                <th class="text-center  bg-dark">Tên danh mục</th>
                                                <th class="text-center  bg-dark">Tên slug</th>
                                                <th class="text-center  bg-dark" style="width:170px">Chức năng</th>
                                                <th class="text-center  bg-dark" style="width:30px">ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($list as $row)
                                                <tr>
                                                    <td class="text-center">
                                                        <input type="checkbox" />
                                                    </td>
                                                    <td class="text-center">
                                                        <img src="{{ asset('img/categorys/' . $row->image) }}"
                                                            class="img-fluid" alt="{{ $row->image }}">
                                                    </td>
                                                    <td class="text-center">
                                                        {{ $row->name }}
                                                    </td>
                                                    <td class="text-center"> {{ $row->slug }}</td>
                                                    <td class="text-center">

                                                        {{-- <a href="{{ route('admin.category.status', ['id' => $row->id]) }}"
                                                            class="btn btn-sm btn-dark">
                                                            <i class="fas fa-toggle-off"></i>
                                                        </a> --}}
                                                        <a href="{{ route("admin.category.status",['id'=>$row->id]) }}" class="btn btn-sm btn-success">
                                                     <i class="fas fa-toggle-on"></i>
                                                  </a>
                                                        <a href="{{ route('admin.category.show', ['id' => $row->id]) }}"
                                                            class="btn btn-sm btn-info">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.category.edit', ['id' => $row->id]) }}"
                                                            class="btn btn-sm btn-primary">
                                                            <i class="far fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('admin.category.delete', ['id' => $row->id]) }}"
                                                            class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                    <td class="text-center">{{  $row->id  }}</td>
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
    <link rel="stylesheet" href="admin.css">
@endsection

@section('footer')
    <link rel="stylesheet" href="admin.css">
@endsection
