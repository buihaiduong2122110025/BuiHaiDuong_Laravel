@extends('layouts.admin')
@section('title', 'Thùng rác danh mục')


@section('content')
    <div>
        <div class="content-wrapper">
            <!-- CONTENT -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <strong class="text-dark text-lg">THÙNG RÁC DANH MỤC</strong>

                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a class="text-decoration-none"
                                        href="{{ route('admin.dashbroad.index') }}">Home</a></li>
                                <li class="breadcrumb-item active">Blank Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a class="btn btn-sm btn-info" href="{{ route('admin.category.index') }}">
                                    <i class="fas fa-arrow-left"></i> Quay lại
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center bg-dark" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th class="text-center bg-dark" style="width:130px;">Hình ảnh</th>
                                    <th class="text-center bg-dark">Tên danh mục </th>
                                    <th class="text-center bg-dark">Tên slug</th>
                                    <th class="text-center bg-dark" style="width:250px">Chức năng</th>
                                    <th class="text-center bg-dark" style="width:30px">ID</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $row)
                                    <tr>
                                        @php
                                            $args = ['id' => $row->id];
                                        @endphp
                                        <td class="text-center">
                                            <input type="checkbox" name="checkID[]" id="checkID">
                                        </td>
                                        <td class="text-center">
                                            <img class="img-fluid" src="{{ asset('img/categorys/' . $row->image) }}"
                                                alt="{{ $row->image }}">
                                        </td>
                                        <td class="text-center">
                                            {{ $row->name }}
                                        </td>
                                        <td class="text-center">
                                            {{ $row->slug }}
                                        </td>
                                        <td class="text-center" style="width:250px; ">
                                            <a href="{{ route('admin.category.show', $args) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.category.restore', $args) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="fas fa-undo"></i>
                                            </a>
                                            <a class=" btn " >
                                                <form action="{{ route('admin.category.destroy', $args) }}" method="post"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('delete')
                                                    <button name="delete" class="btn btn-sm btn-danger" type="submit"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            {{ $row->id }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!-- /.CONTENT -->
        </div>
    </div>

@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
