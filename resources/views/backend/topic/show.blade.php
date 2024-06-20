@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <form action ="index.php?option=topic&cat=process" method="post" enctype="multipart/form-data">

        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">CHI TIẾT CHỦ ĐỀ</strong>
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
                    <a href="index.php?option=topic" class="btn btn-sm btn-info">
                       <i class="fa fa-arrow-left" aria-hidden="true"></i>
                       Về danh sách
                    </a>
                    </div>
                 </div>
  
                 </div>
                 <div class="card-body">
                    <div class="row">
                       <div class="col-md-12">
                          <table class="table table-bordered">
                             <thead>
                                <tr>
                                   
                                   <th class="bg-dark">Tên Trường</th>
                                   <th class="bg-dark">Giá trị</th>
                                </tr>
                             </thead>
                             <tbody>
  
                             <tr>
                                <td>ID</td>
                                 <td><?= $topic->id;?></td>
                             </tr>
                             <tr>
                                <td>name</td>
                                 <td><?= $topic->name;?></td>
                             </tr>
                             <tr>
                                <td>slug</td>
                                 <td><?= $topic->slug;?></td>
                             </tr>
                           
                             <tr>
                                <td>sort_order</td>
                                 <td><?= $topic->sort_order;?></td>
                             </tr>
                             <tr>
                                <td>parent_id</td>
                                 <td><?= $topic->parent_id;?></td>
                             </tr>
                             <tr>
                                <td>metakey</td>
                                 <td><?= $topic->metakey;?></td>
                             </tr>
                             <tr>
                                <td>metadesc</td>
                                 <td><?= $topic->metadesc;?></td>
                             </tr>
                             <tr>
                                <td>created_at</td>
                                 <td><?= $topic->created_at;?></td>
                             </tr>
                             <tr>
                                <td>created_by</td>
                                 <td><?= $topic->created_by;?></td>
                             </tr>
                             <tr>
                                <td>updated_at</td>
                                 <td><?= $topic->updated_at;?></td>
                             </tr>
                             <tr>
                                <td>updated_by</td>
                                 <td><?= $topic->updated_by;?></td>
                             </tr>
                             <tr>
                                <td>status</td>
                                 <td><?= $topic->status;?></td>
                             </tr>
  
  
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
<link rel="stylesheet" href="home.css">
@endsection

