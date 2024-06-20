@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <form action ="index.php?option=order&cat=process" method="order" enctype="multipart/form-data">
        <div class="content-wrapper">
           <section class="content-header">
              <div class="container-fluid">
                 <div class="row mb-2">
                    <div class="col-sm-12">
                    <strong class="text-dark text-lg">CHI TIẾT ĐƠN HÀNG </strong>
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
                          <a class="btn btn-sm btn-info" href="index.php?option=order">
                              <i class="fas fa-arrow-left"></i>Về danh sách
                          </a>
                      </div>
                  </div>
              </div>
                 <div class="card-body p-2">
                    <table class="table table-bordered">
                       <thead>
                          <tr>
                             
                             <th>Tên trường</th>
                             <th>Giá trị</th>
                          </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>ID</td>
                           <td><?= $order->id;?></td>
                       </tr>
                       <tr>
                           <td>user_id</td>
                           <td><?= $order->user_id;?></td>
                       </tr>
                       <tr>
                           <td>deliveryaddress</td>
                           <td><?= $order->deliveryaddress;?></td>
                       </tr>
                       <tr>
                           <td>deliveryname</td>
                           <td><?= $order->deliveryname;?></td>
                       </tr>
                       <tr>
                           <td>deliveryphone</td>
                           <td><?= $order->deliveryphone;?></td>
                       </tr>
                     
                           <td>deliveryemail</td>
                           <td><?= $order->deliveryemail;?></td>
                       </tr>
                       <tr>
                           <td>note</td>
                           <td><?= $order->note;?></td>
                       </tr>
                       <tr>
                           <td>created_at</td>
                           <td><?= $order->created_at;?></td>
                       </tr>
                      
                       <tr>
                           <td>updated_at</td>
                           <td><?= $order->updated_at	;?></td>
                       </tr>
                       <tr>
                           <td>updated_by</td>
                           <td><?= $order->updated_by;?></td>
                       </tr>
                       <tr>
                           <td>status</td>
                           <td><?= $order->status;?></td>
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

