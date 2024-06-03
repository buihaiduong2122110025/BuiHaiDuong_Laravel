@extends('layouts.admin')
@section('title', 'Post')
@section('content')
<div>
   
    <form action="index.php?option=post&cat=create" method="post" enctype="multipart/form-data">

        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                       <strong class="text-dark text-lg">TẤT CẢ BÀI VIẾT</strong>
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
                       <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm">  <i class="fas fa"></i>Tất Cả</a>
     
                          <a href="index.php?option=post&cat=trash" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i>  Thùng rác</a>
                       </div>
     
                       <div class="col-sm-6 text-right">
                        <a href="{{ route('admin.post.create') }}" class="btn btn-sm btn-primary">Thêm bài viết</a>
                       </div>
                    </div>
                 </div>
                 <div class="card-body p-2">
                    <table class="table table-bordered table-hover">
                       <thead>
                          <tr>
                             <th class="text-center  bg-dark" style="width:30px;">
                                <input type="checkbox">
                             </th>
                             <th class="text-center bg-dark" style="width:130px;">Hình ảnh</th>
                             <th class="text-center bg-dark">Tiêu đề bài viết</th>
                             <th class="text-center bg-dark">Tên chủ đề</th>
                             <th class="text-center  bg-dark">Chi tiết bài viết</th>
                             <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                             <th class="text-center bg-dark" style="width:30px">ID</th>
                          </tr>
                       </thead >
                       <tbody>
                        @foreach ($list as $row)

                                <tr>
                                   <td class="text-center">
                                      <input type="checkbox" />
                                   </td>
                                   <td class="text-center">
                                    <img src="{{ asset('img/posts/' . $row->image) }}" class="img-fluid" alt="{{ $row->image }}">
                                </td>
                                   <td class="text-center">
                                      {{ $row->title }}
                                   </td>
                                   <td class="text-center">
                                      <div class="topic_name">
                                        {{ $row->topic_name }}
                                      </div>
                                   </td>
                                   <td class="text-center">
                                    {{ $row->detail }}
                                   </td>
                                   <td class="text-center">
                                         {{-- <a href="{{ route('admin.post.status', ['id' => $row->id]) }}" class="btn btn-sm btn-dark">
                                            <i class="fas fa-toggle-off"></i>
                                         </a> --}}
                                         <a href="{{ route('admin.post.status', ['id' => $row->id]) }}" class="btn btn-sm btn-success">
                                            <i class="fas fa-toggle-on"></i>
                                         </a>
                                         <a href="{{ route('admin.post.show', ['id' => $row->id]) }}"class="btn btn-sm btn-info">
                                         <i class="far fa-eye"></i>
                                      </a>
                                      <a href="{{ route('admin.post.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                         <i class="far fa-edit"></i>
                                      </a>
                                      <a href="{{ route('admin.post.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
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
