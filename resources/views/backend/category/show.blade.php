@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
    <div>
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <strong class="text-dark text-lg">CHI TIẾT DANH MỤC </strong>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a href="}" class="btn btn-sm btn-primary">
                                    <i class="far fa-edit"></i>
                                    Sửa
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                    Xóa
                                </a>
                                <a class="btn btn-sm btn-info" href="index.php?option=category">
                                    <i class="fas fa-arrow-left"></i> Về danh sách
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>

                                            <th class="  bg-dark">Tên trường</th>
                                            <th class="  bg-dark">Giá trị</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>ID</td>
                                            <td><?= $category->id ?></td>
                                        </tr>
                                        <tr>
                                            <td> name</td>
                                            <td><?= $category->name ?></td>
                                        </tr>
                                        <tr>
                                            <td>slug</td>
                                            <td><?= $category->slug ?></td>
                                        </tr>
                                        <tr>
                                            <td>parent_id</td>
                                            <td><?= $category->parent_id ?></td>
                                        </tr>
                                        <tr>
                                            <td>sort_order</td>
                                            <td><?= $category->sort_order ?></td>
                                        </tr>

                                        <tr>
                                            <td>image</td>
                                            <td> <img src="{{ asset('img/categorys/' . $category->image) }}"
                                                    style="width: 100px" class="img-fluid" alt="{{ $category->image }}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>description</td>
                                            <td><?= $category->description ?></td>
                                        </tr>
                                        <tr>
                                            <td>created_at</td>
                                            <td><?= $category->created_at ?></td>
                                        </tr>
                                        <tr>
                                            <td>created_by</td>
                                            <td><?= $category->created_by ?></td>
                                        </tr>
                                        <tr>
                                            <td>updated_at</td>
                                            <td><?= $category->updated_at ?></td>
                                        </tr>
                                        <tr>
                                            <td>updated_by</td>
                                            <td><?= $category->updated_by ?></td>
                                        </tr>
                                        <tr>
                                            <td>status</td>
                                            <td><?= $category->status ?></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    @endsection
    @section('header')
        <link rel="stylesheet" href="home.css">
    @endsection
