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
    
                </div>
            </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a class="btn btn-sm btn-info"   href="{{ route('admin.brand.index') }}">
                                <i class="fas fa-arrow-left"></i> Về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
    
                    <table class="table table-bordered">
                        @foreach ($list as $row)

                        <tr>
                            <th>Tên trường</th>
                            <th>Giá trị</th>
                        </tr>
                        <tr>
                            <td> id</td>
                            <td>
                                {{ $row->id }}
                            </td>
                        </tr>
    
                        <tr>
                                
                            <td> Tên thương hiệu</td>
                            <td>
                                {{ $row->name }}

                            </td>
                        </tr>
                        <tr>
                            <td> Slug </td>
                            <td>
                                {{ $row->slug }}
                            </td>
                        </tr>
                        <tr>
                            <td> description </td>
                            <td>
                                {{ $row->description }}
                            </td>
                        </tr>
                        <tr>
                            <td> sort_order	</td>
                            <td>
                                {{ $row->sort_order }}
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>image</td>
                            <td>   <img src="{{ asset('img/brands/' . $row->image) }}"
                                class="img-fluid" alt="{{ $row->image }}"></td>
                        </tr>
    
                        <tr>
                            <td> Ngày tạo </td>
                            <td>
                                {{ $row->created_at }}
                            </td>
                        </tr>
                        <tr>
                            <td> Người tạo </td>
                            <td>
                                {{ $row->created_by }}
                            </td>
                        </tr>
                        <tr>
                            <td> Người cập nhật </td>
                            <td>
                                
                                {{ $row->updated_by }}
                            </td>
                        </tr>
                        <tr>
                            <td> Ngày cập nhật </td>
                            <td>
                                {{ $row->updated_at }}
                            </td>
                        </tr>
                        <tr>
                            <td> Trạng thái </td>
                            <td>
                                {{ $row->status }}
                            </td>

                        </tr>
                        @endforeach

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
