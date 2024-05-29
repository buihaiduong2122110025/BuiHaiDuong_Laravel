@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')
<div>

    <form action ="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">TẤT CẢ MENU</strong>
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
  
              <a href="index.php?option=menu&cat=trash" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i> Thùng rác</a>
            </div>
           
                 <div class="card-body p-2">
  
                    <div class="row">
                       <div class="col-md-3">
                          <div class="accordion" id="accordionExample">
                             <div class="card mb-0 p-3">
                                <select name="position" class="form-control">
                                   <option value="mainmenu">Main Menu</option>
                                   <option value="footermenu">Footer Menu</option>
                                </select>
                             </div>
                             <div class="card mb-0">
                                <div class="card-header" id="headingCategory">
                                   <strong data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true"
                                      aria-controls="collapseCategory">
                                      Danh mục sản phẩm
                                   </strong>
                                </div>
                                <div id="collapseCategory" class="collapse" aria-labelledby="headingCategory"
                                   data-parent="#accordionExample">
                                   <div class="card-body p-3">   
                                      @foreach ($list_category as $category):
                                      <div class="form-check">
                                         <input name="categoryId[]" class="form-check-input" type="checkbox" value="<?=$category->id;?>"
                                            id="categoryCheck<?=$category->id;?>">
                                         <label class="form-check-label" for="categoryCheck<?=$category->id;?>">
                                            <?= $category->name;?>
                                         </label>
                                      </div>
                                      @endforeach 
                                      <div class="my-3">
                                         <button name="ADDCATEGORY" class="btn btn-sm btn-success form-control">Thêm</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <form action ="index.php?option=menu&cat=process" method="post" enctype="multipart/form-data">
     
                             <div class="card mb-0">
                                <div class="card-header" id="headingBrand">
                                   <strong data-toggle="collapse" data-target="#collapseBrand" aria-expanded="true"
                                      aria-controls="collapseBrand">
                                      Thương hiệu
                                   </strong>
                                </div>
                                <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand"
                                   data-parent="#accordionExample">
                                   <div class="card-body p-3">
                                   @foreach ($list_brand as $brand): 
                                      <div class="form-check">
                                         <input name="brandId[]" class="form-check-input" type="checkbox" value="<?=$brand->id;?>"
                                            id="brandCheck<?=$brand->id;?>">
                                         <label class="form-check-label" for="brandCheck<?=$brand->id;?>">
                                            <?= $brand->name;?>
                                         </label>
                                      </div>
                                     @endforeach
                                      <div class="my-3">
                                   
                                         <button name="ADDBRAND" class="btn btn-sm btn-success form-control">Thêm</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             </form>
                             <div class="card mb-0">
                                <div class="card-header" id="headingTopic">
                                   <strong data-toggle="collapse" data-target="#collapseTopic" aria-expanded="true"
                                      aria-controls="collapseTopic">
                                      Chủ đề bài viết
                                   </strong>
                                </div>
                                <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic"
                                   data-parent="#accordionExample">
                                   <div class="card-body p-3">
                                   <@foreach ($list_topic as $topic):
                                      <div class="form-check">
                                         <input name="topicId[]" class="form-check-input" type="checkbox" value="<?=$topic->id;?>"
                                            id="topicCheck<?=$topic->id;?>">
                                         <label class="form-check-label" for="topicCheck<?=$topic->id;?>">
                                            <?= $topic->name;?>
                                         </label>
                                      </div>
                                      @endforeach 
                                      <div class="my-3">
                                         <button name="ADDTOPIC" class="btn btn-sm btn-success form-control">Thêm</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="card mb-0">
                                <div class="card-header" id="headingP">
                                   <strong data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
                                      aria-controls="collapsePage">
                                    Trang Đơn
                                   </strong>
                                </div>
                                <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                                   data-parent="#accordionExample">
                                   <div class="card-body p-3">   
                                    @foreach ($list_post as $post):
                                      <div class="form-check">
                                         <input name="pageId[]" class="form-check-input" type="checkbox" value="<?=$post->id;?>"
                                            id="pageCheck<?=$post->id;?>">
                                         <label class="form-check-label" for="pageCheck<?=$post->id;?>">
                                            <?= $post->title;?>
                                         </label>
                                      </div>
                                      @endforeach 
                                      <div class="my-3">
                                         <button name="ADDPAGE" class="btn btn-sm btn-success form-control">Thêm</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="card mb-0">
                                <div class="card-header" id="headingCustom">
                                   <strong data-toggle="collapse" data-target="#collapseCustom" aria-expanded="true"
                                      aria-controls="collapseCustom">
                                      Tuỳ liên kết
                                   </strong>
                                </div>
                                <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom"
                                   data-parent="#accordionExample">
                                   <div class="card-body p-3">
                                      <div class="mb-3">
                                         <label>Tên menu</label>
                                         <input type="text" name="name" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                         <label>Liên kết</label>
                                         <input type="text" name="link" class="form-control">
                                      </div>
                                      <div class="mb-3">
                                         <button name="ADDCUSTOM" class="btn btn-sm btn-success form-control">Thêm</button>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="col-md-9">
                          <table class="table table-bordered">
                             <thead class="bg-dark">
                                <tr class="bg-dark">
                                   <th class="text-center bg-dark" style="width:30px;">
                                      <input type="checkbox">
                                   </th>
                                   <th class="text-center bg-dark" >Tên menu</th>
                                   <th class="text-center bg-dark" >Liên kết</th>
                                   <th class="text-center bg-dark" >Vị trí</th>
                                   <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                          <th class="text-center" style="width:30px">ID</th>
                                </tr>
                             </thead>
                             <tbody>
                     @foreach ($list as $row )
                         
                     
                             <tr>
                                <td class="text-center">
                                   <input type="checkbox" />
                                </td>
                                <td class="text-center">
                               {{$row->name}}
                                </td>
                                <td class="text-center">
                                    {{$row->link}}
                                </td>
                               
                                <td class="text-center">
                                    {{$row->position}}
                                </td>
                               
                               
                                <td class="text-center">
                                    {{-- <a href="{{ route('admin.menu.status', ['id' => $row->id]) }}" class="btn btn-sm btn-dark">
                                         <i class="fas fa-toggle-off"></i>
                                      </a> --}}
                                      <a href="{{ route('admin.menu.status', ['id' => $row->id]) }}" class="btn btn-sm btn-success">
                                         <i class="fas fa-toggle-on"></i>
                                      </a>
                                      <a href="{{ route('admin.menu.show', ['id' => $row->id]) }}"class="btn btn-sm btn-info">
                                      <i class="far fa-eye"></i>
                                   </a>
                                   <a href="{{ route('admin.menu.edit', ['id' => $row->id]) }}" class="btn btn-sm btn-primary">
                                      <i class="far fa-edit"></i>
                                   </a>
                                   <a href="{{ route('admin.menu.delete', ['id' => $row->id]) }}" class="btn btn-sm btn-danger">
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