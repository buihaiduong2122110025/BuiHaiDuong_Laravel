@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <div class="content-wrapper">
        <!-- CONTENT -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tất cả đơn hàng</h1>
                        {{-- <a class="btn btn-sm btn-primary" href="{{ route('admin.order.create') }}">
                            <i class="fas fa-plus"></i> Thêm order
                        </a> --}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashbroad.index') }}">Home</a></li>
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
                            <a class="btn btn-sm btn-info" href="{{ route('admin.order.index') }}">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" style="width:30px">#</th>
                                <th>Khách hàng</th>
                                <th>Điện thoại</th>
                                <th>Email</th>
                                <th class="text-center" style="width:190px">Chức năng</th>
                                <th class="text-center" style="width:30px">ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($list as $row)
                            <tr>
                                @php
                                $args=['id'=>$row->id]
                                @endphp
                                <td class="text-center">
                                    <input type="checkbox" name="checkID[]" id="checkID">
                                </td>
                                <td>
                                    {{ $row->delivery_name}}
                                </td>
                                <td>
                                    {{ $row->delivery_phone}}
                                </td>
                                <td>
                                    {{ $row->delivery_email}}
                                </td>
                                <td class="text-center">

                                    <a href="{{ route('admin.order.show',$args) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.order.restore',$args) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-undo"></i>
                                    </a>
                                    <form action="{{ route('admin.order.destroy',$args) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method("delete")
                                        <button class="btn btn-sm btn-danger" name="delete" type="submit"><i class="fas fa-trash"></i></button>
                                    </form>
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

