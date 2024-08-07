@extends('layouts.admin')
@section('title', 'Order')
@section('content')
    <div>



        <div class="content-wrapper">
            <!-- Content Header (order header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <strong class="text-dark text-lg">TẤT CẢ ĐƠN HÀNG</strong>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>


            <!-- Main content -->
            <section class="content">


                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm"> <i
                                        class="fas fa"></i>Tất Cả</a>

                                <a href="{{ route('admin.order.trash') }}" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash"></i> Thùng rác</a>
                            </div>
                            <div class="col-sm-6 text-right">
                                <a href="{{ route('admin.order.create') }}" class="btn btn-sm btn-primary"
                                    class="btn btn-sm btn-primary">Thêm đơn hàng</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center  bg-dark" style="width:30px;">
                                        <input type="checkbox">
                                    </th>
                                    <th class="text-center bg-dark">Tên Khách Hàng</th>
                                    <th class="text-center bg-dark">Email</th>
                                    <th class="text-center bg-dark">Phone</th>
                                    <th class="text-center bg-dark">Ngày Tạo </th>
                                    {{-- <th class="text-center">Mã Khách Hàng</th> --}}
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
                                        <td class="text-center">
                                            <div class="deliveryname"></div>
                                            {{ $row->delivery_name }}
                                        </td>
                                        <td class="text-center">
                                            <div class="deliveryemail"></div>
                                            {{ $row->delivery_email }}
                                        </td>
                                        <td class="text-center">
                                            <div class="deliveryphone"></div>
                                            {{ $row->delivery_phone }}

                                        </td>
                                        <td class="text-center">
                                            <div class="deliveryaddress"></div>
                                            {{ $row->created_at }}
                                        </td>
                                        {{-- <td class="text-center">
                                    <div class="user_id"></div>
                                    {{ $row->user_id }}

                                 </td> --}}
                                        <td class="text-center">
                                            @if ($row->status == 2)
                                                <a href="{{ route('admin.order.status', $args) }}"
                                                    class="btn btn-sm btn-dark">
                                                    <i class="fas fa-toggle-off"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('admin.order.status', $args) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-toggle-on"></i>
                                                </a>
                                            @endif

                                            <a href="{{ route('admin.order.show', $args) }}" class="btn btn-sm btn-info">
                                                <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.order.edit', $args) }}" class="btn btn-sm btn-primary">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.order.delete', $args) }}"
                                                class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        <td class="text-center">{{ $row->id }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->

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
