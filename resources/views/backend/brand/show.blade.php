@extends('layouts.admin')
@section('title', 'Banner')
@section('content')

    <div>


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <strong class="text-dark text-lg">CHI TIẾT THƯƠNG HIỆU</strong>
                        </div>
                        <div class="col-sm-6">
                         <ol class="breadcrumb float-sm-right">
                             <li class="breadcrumb-item text-decoration-none"><a href="#">Home</a></li>
                             <li class="breadcrumb-item active">Blank Page</li>
                         </ol>
                     </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="brand">
                            <div class="col-md-12 text-right">
                                <a href="}" class="btn btn-sm btn-primary">
                                    <i class="far fa-edit"></i>
                                    Sửa
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Xóa
                                </a>
                                <a class="btn btn-sm btn-info" href="{{ route('admin.brand.index') }}">
                                    <i class="fas fa-arbrand-left"></i> Về danh sách
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">

                            <tr>
                                <th class="bg-dark">Tên trường</th>
                                <th class="bg-dark">Giá trị</th>
                            </tr>
                            <tr>
                                <td> id</td>
                                <td>
                                    {{ $brand->id }}
                                </td>
                            </tr>

                            <tr>

                                <td> Tên thương hiệu</td>
                                <td>
                                    {{ $brand->name }}

                                </td>
                            </tr>
                            <tr>
                                <td> Slug </td>
                                <td>
                                    {{ $brand->slug }}
                                </td>
                            </tr>
                            <tr>
                                <td> description </td>
                                <td>
                                    {{ $brand->description }}
                                </td>
                            </tr>
                            <tr>
                                <td> sort_order </td>
                                <td>
                                    {{ $brand->sort_order }}
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <td>image</td>
                                <td> <img src="{{ asset('img/brands/' . $brand->image) }}" class="img-fluid"
                                        alt="{{ $brand->image }}"></td>
                            </tr>

                            <tr>
                                <td> Ngày tạo </td>
                                <td>
                                    {{ $brand->created_at }}
                                </td>
                            </tr>
                            <tr>
                                <td> Người tạo </td>
                                <td>
                                    {{ $brand->created_by }}
                                </td>
                            </tr>
                            <tr>
                                <td> Người cập nhật </td>
                                <td>

                                    {{ $brand->updated_by }}
                                </td>
                            </tr>
                            <tr>
                                <td> Ngày cập nhật </td>
                                <td>
                                    {{ $brand->updated_at }}
                                </td>
                            </tr>
                            <tr>
                                <td> Trạng thái </td>
                                <td>
                                    {{ $brand->status }}
                                </td>

                            </tr>


                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        Footer
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection
