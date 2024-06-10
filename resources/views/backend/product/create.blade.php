@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
<div>
   <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">THÊM SẢN PHẨM</strong>
                    </div>
                 </div>
              </div>
           </section>
           <section class="content">
              <div class="card">
                 <div class="card-header text-right">
                    <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-info">
                       <i class="fa fa-arrow-left" aria-hidden="true"></i>
                       Về danh sách
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary" type="submit" name="THEM">
                       <i class="fa fa-save" aria-hidden="true"></i>
                       Thêm sản phẩm
                    </button>
                 </div>
                 <div class="card-body">

                    <div class="row">
                       <div class="col-md-9">
                          <div class="mb-3">
                             <label>Tên sản phẩm (*)</label>
                           
                             <input type="text" placeholder="Nhập tên sản phẩm" name="name" class="form-control"  value="{{ old('name') }}">
                          
                             @error('name')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                           </div>
                          <div class="mb-3">
                             <label>Slug</label>
                             <input type="text" placeholder="Nhập slug" name="slug" class="form-control">
                          </div>
                          <div class="row">
                             <div class="col-md-6">
                                <div class="mb-3">
                                   <label>Danh mục (*)</label>
                                   <select name="category_id" class="form-control">
                                      <option value="">Chọn danh mục</option>
                                      {!! $category_id_html !!}


                                   </select>
                                </div>
                             </div>
                             <div class="col-md-6">
                                <div class="mb-3">
                                   <label>Thương hiệu (*)</label>
                                   <select name="brand_id" class="form-control">
                                      <option value="">Chọn thương hiệu</option>

                                      {!! $brand_id_html !!}

                                   </select>
                                </div>
                             </div>
                          </div>
                          <div class="mb-3">
                             <label>Chi tiết (*)</label>
                             <textarea name="detail"   placeholder="Nhập chi tiết" class="form-control"></textarea>
                        <div class="mb-3">
                          <label>Mô tả</label>
                         <textarea name="description"   placeholder="Nhập mô tả" class="form-control"></textarea>
                        </div>
                      
                       </div>
                       <div class="col-md-3">
                          <div class="mb-3">
                             <label>Giá bán (*)</label>
                             <input type="number" value="10000" min="10000" name="price" class="form-control">
                          </div>
                          <div class="mb-3">
                             <label>Giá sale (*)</label>
                             <input type="number" value="10000" min="10000" name="pricesale" class="form-control">
                          </div>
                          <div class="mb-3">
                             <label>Số Lượng</label>
                             <input type="number" value="1" min="1" name="qty" class="form-control">
                          </div>
                          <div class="mb-3">
                             <label>Hình đại diện</label>
                             <input type="file" name="image" class="form-control">
                          </div>
                          <div class="mb-3">
                             <label>Trạng thái</label>
                             <select name="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>
                             </select>
                          </div>
                       </div>
                    </div>
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
