@extends('layouts.admin')
@section('title', 'Product')
@section('content')
    <div>
        <form action="index.php?option=row&cat=process" method="post" enctype="multipart/form-data">

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ SẢN PHẨM</strong>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm"> <i
                                            class="fas fa"></i>Tất Cả</a>

                                    <a href="index.php?option=row&cat=trash" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Thùng rác</a>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary"
                                        class="btn btn-sm btn-primary">Thêm sản
                                        phẩm</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-hover bg-dark">
                                <thead>
                                    <tr>
                                        <th class="text-center  bg-dark" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center bg-dark" style="width:130px;">Hình ảnh</th>
                                        <th class="text-center  bg-dark">Tên sản phẩm</th>
                                        <th class="text-center bg-dark">Tên danh mục</th>
                                        <th class="text-center  bg-dark">Tên thương hiệu</th>
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
                                                <img src="{{ asset('img/products/' . $row->image) }}"
                                                    class="img-fluid"alt="{{ $row->image }}">
                                            </td>
                                            <td class="text-center">
                                                {{ $row->name }}
                                            </td>
                                            <td class="text-center">{{ $row->category_name }} </td>
                                            <td class="text-center">{{ $row->brand_name }} </td>
                                            <td class="text-center">
                                                @if ($row->status == 2)
                                                <a href="{{ route('admin.product.status', $args) }}"
                                                    class="btn btn-sm btn-dark">
                                                    <i class="fas fa-toggle-off"></i>
                                                </a>
                                                @else
                                                <a href="{{ route('admin.product.status', $args) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i>
                                                </a>
                                                @endif
                                                <a href="{{ route('admin.product.show', $args) }}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.product.edit', $args) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.product.delete', $args) }}"
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
