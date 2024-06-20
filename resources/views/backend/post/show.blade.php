@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <form action ="index.php?option=post&cat=process" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">CHI TIẾT BÀI VIẾT</strong>
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
                          <a class="btn btn-sm btn-info" href="index.php?option=post">
                              <i class="fas fa-arrow-left"></i> Về danh sách
                          </a>
                      </div>
                  </div>
              </div>
                 <div class="card-body p-2">
                    <table class="table table-bordered">
                       <thead>
                          <tr>
                             
                             <th class="bg-dark"  style="width:30%">Tên trường</th>
                             <th class="bg-dark">Giá trị</th>
                          </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>ID</td>
                           <td><?= $post->id;?></td>
                       </tr>
                       <tr>
                           <td>topic_id</td>
                           <td><?= $post->topic_id;?></td>
                       </tr>
                       <tr>
                           <td>title</td>
                           <td><?= $post->title;?></td>
                       </tr>
                       <tr>
                           <td>slug</td>
                           <td><?= $post->slug;?></td>
                       </tr>
                       <tr>
                           <td>detail</td>
                           <td><?= $post->detail;?></td>
                       </tr>
                       <tr>
                                   <td>image</td>
                                   <td><img class="img-fluid" src="{{ asset('img/posts/'.$post->image) }}"  style="width:30%"></td>
                                </tr>
                             <tr>
                       <tr>
                           <td>type</td>
                           <td><?= $post->type;?></td>
                       </tr>
                       <tr>
                           <td>description</td>
                           <td><?= $post->description;?></td>
                       </tr>
                       <tr>
                           <td>created_at</td>
                           <td><?= $post->created_at;?></td>
                       </tr>
                       <tr>
                           <td>created_by</td>
                           <td><?= $post->created_by;?></td>
                       </tr>
                       <tr>
                           <td>updated_at</td>
                           <td><?= $post->updated_at	;?></td>
                       </tr>
                       <tr>
                           <td>updated_by</td>
                           <td><?= $post->updated_by;?></td>
                       </tr>
                       <tr>
                           <td>status</td>
                           <td><?= $post->status;?></td>
                       </tr>
  
  
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
<link rel="stylesheet" href="home.css">
@endsection

