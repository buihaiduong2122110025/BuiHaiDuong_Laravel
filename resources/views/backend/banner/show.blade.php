@extends('layouts.admin')
@section('title', 'Banner')
@section('content')

    <div>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="banner mb-2">
                        <div class="col-sm-12">
                            <strong class="text-dark text-lg">CHI TIẾT BANNER </strong>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <div class="banner">
                            <div class="col-md-12 text-right">
                                <a class="btn btn-sm btn-info"     href="{{ route('admin.banner.index') }}">
                                    <i class="fas fa-arbanner-left"></i> Về danh sách
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>

                                    <th>Tên trường</th>
                                    <th>Giá trị</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                  
                                        <td>ID</td>
                                        <td>{{ $banner->id }}</td>

                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td>{{ $banner->name }}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>   <img src="{{ asset('img/banners/' . $banner->image) }}"
                                        class="img-fluid" alt="{{ $banner->image }}" style="width: 60%"></td>
                                </tr>
                                <tr>
                                    <td>link</td>
                                    <td>{{ $banner->link }}</td>
                                </tr>
                                <tr>
                                    <td>sort_order</td>
                                    <td>{{ $banner->sort_order }}</td>
                                </tr>
                                <tr>
                                    <td>position</td>
                                    <td>{{ $banner->position }}</td>
                                </tr>

                                <tr>
                                    <td>updated_at</td>
                                    <td>{{ $banner->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td>updated_by</td>
                                    <td>{{ $banner->updated_by }}</td>
                                </tr>
                                <tr>
                                    <td>status</td>
                                    <td>{{ $banner->status }}</td>
                                </tr>

                                <tr>
                                    <td>created_at</td>
                                    <td>{{ $banner->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>created_by</td>
                                    <td>{{ $banner->created_by }}</td>
                                </tr>
                             
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection
