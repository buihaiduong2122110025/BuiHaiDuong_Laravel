@extends('layouts.admin')
@section('title', 'Banner')
@section('content')

    <div>

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
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
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <a class="btn btn-sm btn-info"     href="{{ route('admin.banner.index') }}">
                                    <i class="fas fa-arrow-left"></i> Về danh sách
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
                                    @foreach ($list as $row)
                                        <td>ID</td>
                                        <td>{{ $row->id }}</td>

                                </tr>
                                <tr>
                                    <td>name</td>
                                    <td>{{ $row->name }}</td>
                                </tr>
                                <tr>
                                    <td>link</td>
                                    <td>{{ $row->link }}</td>
                                </tr>
                                <tr>
                                    <td>sort_order</td>
                                    <td>{{ $row->sort_order }}</td>
                                </tr>
                                <tr>
                                    <td>position</td>
                                    <td>{{ $row->position }}</td>
                                </tr>

                                <tr>
                                    <td>updated_at</td>
                                    <td>{{ $row->updated_at }}</td>
                                </tr>
                                <tr>
                                    <td>updated_by</td>
                                    <td>{{ $row->updated_by }}</td>
                                </tr>
                                <tr>
                                    <td>status</td>
                                    <td>{{ $row->status }}</td>
                                </tr>

                                <tr>
                                    <td>created_at</td>
                                    <td>{{ $row->created_at }}</td>
                                </tr>
                                <tr>
                                    <td>created_by</td>
                                    <td>{{ $row->created_by }}</td>
                                </tr>
                                @endforeach
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
