@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
<div>


    <form action ="index.php?option=topic&cat=process" method="post" enctype="multipart/form-data">

        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">TẤT CẢ CHỦ ĐỀ</strong>
                    </div>
                 </div>
              </div>
           </section>
           <!-- Main content -->
           <section class="content">
           <div class="card">
  
           <div class="card-header ">
                  <div class="row">
                    <div class="col-md-6">
                    <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm">  <i class="fas fa"></i>Tất Cả</a>
  
                    <a href="index.php?option=topic&cat=trash" class="btn btn-danger btn-sm">  <i class="fas fa-trash"></i> Thùng rác</a>
                    </div>
                    <div class="col-md-6 text-right">
                    <button class="btn btn-sm btn-primary " type="submit" name ="THEM">
                       <i class="fa fa-save" aria-hidden="true"></i>
                     Thêm chủ đề
                    </button>
                  </div>
                 </div>
                 <div class="card-body">
  
                    <div class="row">
                       <div class="col-md-4">
                          <div class="mb-3">
                             <label>Tên chủ đề (*)</label>
                             <input type="text" name="name"placeholder="Nhập name"  class="form-control">
                          </div>
                          <div class="mb-3">
                             <label>Slug</label>
                             <input type="text" name="slug"  placeholder="Nhập slug" class="form-control">
                          </div>
                          {{-- <div class="mb-3">
                             <label>Danh mục cha (*)</label>
                             <select name="parent_id" class="form-control">
                                <option value="0">None</option>
                             </select>
                          </div> --}}
                          <div class="mb-3">
                             <label>Sắp Xếp</label>
                             <select name="sort_order" class="form-control">
                                <option value="1">1</option>   
                             </select>
                          </div>   
                        
                          <div class="mb-3">
                             <label>Từ khóa SEO</label>
                            <textarea name="metakey"   placeholder="Nhập từ khóa SEO" class="form-control"></textarea>
                           </div>
                           <div class="mb-3">
                             <label>Mô tả SEO</label>
                            <textarea name="metadesc"   placeholder="Nhập mô tả SEO"class="form-control"></textarea>
                           </div>
                          <div class="mb-3">
                             <label>Trạng thái</label>
                             <select name="status" class="form-control">
                                <option value="1">Xuất bản</option>
                                <option value="2">Chưa xuất bản</option>
                             </select>
                          </div>
                    </div>
                    
                       <div class="col-md-8 ">
                       <table class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                   <th class="text-center bg-dark" style="width:30px;">
                                      <input type="checkbox">
                                   </th>
                                   <th class="text-center bg-dark">Tên chủ đề</th>
                                   <th class="text-center bg-dark">Tên slug</th>
                                   <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                                   <th class="text-center bg-dark" style="width:30px">ID</th>
                                </tr>
                             </thead>
                             <tbody>
                                @foreach ($list as $row)

                                      <tr>
                                         <td class="text-center">
                                            <input type="checkbox" />
                                         </td>
                                         <td class="text-center">
                                            {{ $row->name }}
                                         </td>
                                         <td class="text-center">{{ $row->slug }}</td>
                                         <td class="text-center">
                                               {{-- <a href="{{ route('admin.topic.status', ['id' => $row->id]) }}" class="btn btn-sm btn-dark">
                                                  <i class="fas fa-toggle-off"></i>
                                               </a> --}}
                                               <a href="{{ route('admin.topic.status', ['id' => $row->id]) }}" class="btn btn-sm btn-success">
                                                  <i class="fas fa-toggle-on"></i>
                                               </a>
                                            <a href="{{ route('admin.topic.show', ['id' => $row->id]) }}" class="btn btn-sm btn-info">
                                               <i class="far fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.topic.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                               <i class="far fa-edit"></i>
                                            </a>
                                            <a href="{{ route('admin.topic.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
                                               <i class="fas fa-trash"></i>
                                            </a>
                                         <td class="text-center">{{ $row->id }}</td>
                                      </tr>
                                 @endforeach
                             </tbody>
                          </table>
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
