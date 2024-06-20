@extends('layouts.admin')
@section('title', 'Contact')
@section('content')
    <div>
        <form action="index.php?option=contact&cat=create" method="contact" enctype="multipart/form-data">

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12">
                                <strong class="text-dark text-lg">TẤT CẢ LIÊN HỆ</strong>
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

                                    <a href="{{ route('admin.contact.trash') }}" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> Thùng rác</a>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('admin.contact.create') }}" class="btn btn-sm btn-primary"
                                        class="btn btn-sm btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i>Thêm
                                        liên hệ</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-2">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center bg-dark" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center bg-dark" style="width:160px;">Tên khách hàng</th>
                                        <th class="text-center bg-dark" style="width:160px;">Email</th>
                                        <th class="text-center bg-dark" style="width:160px;">Phone</th>
                                        <th class="text-center bg-dark" style="width:160px;"> Tiêu đề</th>
                                        {{-- <th class="text-center bg-dark" style="width:160px;"> Content</th> --}}
                                        <th class="text-center bg-dark" style="width:160px;">Chức Năng</th>
                                        <th class="text-center bg-dark" style="width:20px;">ID</th>
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
                                                {{ $row->name }}
                                            </td>
                                            <td class="text-center">

                                                {{ $row->email }}

                                            </td>
                                            <td class="text-center">
                                                {{ $row->phone }}
                                            </td>
                                            <td class="text-center">
                                                {{ $row->title }}
                                            </td>



                                            {{-- <td class="text-center">
                                              {{$row->content}}
                                            </td> --}}
                                            <td class="text-center">
                                                @if ($row->status == 2)
                                                    <a href="{{ route('admin.contact.status', $args) }}"
                                                        class="btn btn-sm btn-dark">
                                                        <i class="fas fa-toggle-off"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('admin.contact.status', $args) }}"
                                                        class="btn btn-sm btn-success">
                                                        <i class="fas fa-toggle-on"></i>
                                                    </a>
                                                @endif

                                                <a href="{{ route('admin.contact.show', $args) }}"
                                                    class="btn btn-sm btn-info">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.contact.edit', $args) }}"
                                                    class="btn btn-sm btn-primary">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <a href="{{ route('admin.contact.delete', $args) }}"
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
