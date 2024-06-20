@extends('layouts.admin')
@section('title', 'Product')
@section('content')
    <div class="content-wrapper">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <strong class="text-dark text-lg">CHI TIẾT SẢN PHẨM</strong>
                    </div>
                    <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                         <li class="breadcrumb-item text-decoration-none"><a href="#">Home</a></li>
                         <li class="breadcrumb-item active">Blank Page</li>
                     </ol>
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
                            <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-info">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Về danh sách
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="bg-dark" style="width:30%">Tên trường</th>
                                    <th class="bg-dark">Giá trị</th>
                                </tr>
                            </thead>
                                <tbody>



                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $product->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>category_id</td>
                                        <td>{{ $product->category_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>brand_id</td>
                                        <td>{{ $product->brand_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>name</td>
                                        <td>{{ $product->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>slug</td>
                                        <td>{{ $product->slug }}</td>
                                    </tr>
                                    <tr>
                                        <td>price</td>
                                        <td>{{ $product->price }}</td>
                                    </tr>
                                    <tr>
                                        <td>pricesale</td>
                                        <td>{{ $product->pricesale }}</td>
                                    </tr>
                                    <tr>
                                        <td>image</td>
                                        <td><img class="img-fluid" src="{{ asset('img/products/' . $product->image) }}"
                                                alt="{{ $product->image }}" style="width: 300px"></td>
                                    </tr>
                                    <tr>
                                        <td>qty</td>
                                        <td>{{ $product->qty }}</td>
                                    </tr>
                                    <tr>
                                        <td>detail</td>
                                        <td>{{ $product->detail }}</td>
                                    </tr>
                                    <tr>
                                        <td>description</td>
                                        <td>{{ $product->description }}</td>
                                    </tr>
                                    <tr>
                                        <td>created_at</td>
                                        <td>{{ $product->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>created_by</td>
                                        <td>{{ $product->created_by }}</td>
                                    </tr>
                                    <tr>
                                        <td>updated_at</td>
                                        <td>{{ $product->updated_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>updated_by</td>
                                        <td>{{ $product->updated_by }}</td>
                                    </tr>
                                    <tr>
                                        <td>status</td>
                                        <td>{{ $product->status }}</td>
                                    </tr>

                                </tbody>
                            
                        </table>
                    </div>
                </div>
        </section>
    </div>


@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection

@section('footer')
    <link rel="stylesheet" href="admin.css">
@endsection
