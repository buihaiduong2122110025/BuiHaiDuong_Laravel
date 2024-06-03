@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
<div>
    <form action="index.php?option=post&cat=process" method="post" enctype="multipart/form-data">

        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">THÊM BÀI VIẾT</strong>
                    </div>
                 </div>
              </div>
           </section>
           <section class="content">
              <div class="card">
                 <div class="card-header text-right">
                    <a href="{{ route('admin.post.index') }}" class="btn btn-sm btn-info">
                       <i class="fa fa-arrow-left" aria-hidden="true"></i>
                       Về danh sách
                                   </a>
                    <button class="btn btn-sm btn-primary" type="submit" name="THEM">
                       <i class="fa fa-save" aria-hidden="true"></i>
                       Thêm bài viết
                    </button>
                 </div>
                 <div class="card-body">
                    <div class="row">
                       <div class="col-md-9">
                          <div class="mb-3">
                             <label>Tiêu đề bài viết (*)</label>
                             <input type="text" name="title" placeholder="Nhập name" class="form-control">
                          </div>
                          <div class="mb-3">
                                   <label>Slug</label>
                                   <input type="text" placeholder="Nhập slug" name="slug" class="form-control">
                                </div>
                          <div class="mb-3">
                             <label>Kiểu bài viết</label>
                             <textarea   name="type" placeholder="Nhập Kiểu bài viết" class="form-control"></textarea>
                          </div>
                          <div class="mb-3">
                             <label>Mô tả</label>
                             <textarea name="description" placeholder="Nhập mô tả" class="form-control"></textarea>
                          </div>
                          <div class="mb-3">
                             <label>Chi tiết (*)</label>
                               <textarea name="detail" placeholder="Nhập chi tiết" class="form-control"></textarea>
                          </div>
                       </div>
     
                       <div class="col-md-3">
                          <div class="mb-3">
                             <label>Chủ đề (*)</label>
                             <select name="topic_id" class="form-control">
                                <option value="0">None</option>
                             </select>
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
