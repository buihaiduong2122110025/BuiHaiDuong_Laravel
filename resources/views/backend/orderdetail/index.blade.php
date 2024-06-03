@extends('layouts.admin')
@section('title', 'Orderdetail')
@section('content')
<div>

    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <strong class="text-dark text-lg">TẤT CẢ CHI TIẾT ĐƠN HÀNG</strong>
          </div>
         
      </div><!-- /.container-fluid -->
    </section>

    
<!-- Main content -->
      <section class="content">


<!-- Default box -->
  <div class="card">
        <div class="card-header">
          
            <div class="row">
              <div class="col-sm-6">
              <a href="index.php?option=brand&cat=all" class="btn btn-success btn-sm">  <i class="fas fa"></i>Tất Cả</a>

              <a href="index.php?option=orderdetail&cat=trash" class="btn btn-danger btn-sm">
                <i class="fas fa-trash"></i> Thùng rác</a>   
              </div>
              
              <div class="col-sm-6 text-right">
                <a href="index.php?option=orderdetail&cat=create" class="btn btn-success btn-sm">
                <i class="fas fa-plus"></i> Thêm Đơn hàng</a>
               
              </div>
            </div>


         
        </div>
               <div class="card-body">
            <table class="table table-bordered table-hover">
               <thead>
                  <tr>
                     <th class="text-center bg-dark" style="width:30px;">
                        <input type="checkbox"> 
                     </th>
                     <th class="text-center bg-dark">Mã Đơn Hàng</th>
                     <th class="text-center bg-dark">Tên sản phẩm </th>
                     <th class="text-center bg-dark">Giá</th>
                     <th class="text-center bg-dark">Số Lượng</th>
                     <th class="text-center bg-dark">Tổng Cộng </th>
                     <th class="text-center bg-dark" style="width:170px">Chức năng</th>
                     <th class="text-center bg-dark" style="width:30px">ID</th>
                  </tr>
               </thead>
               <tbody>
                @foreach ($list as $row)
                    
                        <tr>
                           <td class="text-center">
                              <input type="checkbox" />
                           <td class="text-center">
                              <div class="order_id"></div>
                              {{ $row->order_id }}
                           </td>
                           <td class="text-center">
                              <div class="product_id"></div>
                              {{ $row->product_name }}

                           </td>
                           <td class="text-center">
                              <div class="price"></div>
                              {{ $row->price }}
                           </td>
                           <td class="text-center">
                              <div class="qty"></div>
                              {{ $row->qty }}
                           </td>
                           <td class="text-center">
                              <div class="amount"></div>
                              {{ $row->amount }}
                           </td>
                           <td class="text-center">
                              
                                 <a href="index.php?option=orderdetail&cat=status&id=<?= $row->id; ?>" class="btn btn-sm btn-success">
                                    <i class="fas fa-toggle-on"></i>
                                 </a>
                              <a href="index.php?option=orderdetail&cat=show&id=<?= $row->id; ?>" class="btn btn-sm btn-info">
                                 <i class="far fa-eye"></i>
                              </a>
                              <a href="index.php?option=orderdetail&cat=edit&id=<?= $row->id; ?>" class="btn btn-sm btn-primary">
                                 <i class="far fa-edit"></i>
                              </a>
                              <a href="index.php?option=orderdetail&cat=delete&id=<?= $row->id; ?>" class="btn btn-sm btn-danger">
                                 <i class="fas fa-trash"></i>
                              </a>
                           <td class="text-center">{{ $row->id }}</td>
                        </tr>
                        @endforeach

               </tbody>
            </table>

         </div>
        <!-- /.card-body -->
     
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
