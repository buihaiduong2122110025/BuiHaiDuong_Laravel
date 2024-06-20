@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <form action ="index.php?option=orderdetail&cat=process" method="orderdetail" enctype="multipart/form-data">
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
                          <a class="btn btn-sm btn-info" href="index.php?option=orderdetail">
                              <i class="fas fa-arrow-left"></i>Về danh sách
                          </a>
                      </div>
                  </div>
              </div>
                 <div class="card-body p-2">
                    <table class="table table-borderdetailed">
                       <thead>
                          <tr>
                             
                             <th>Tên trường</th>
                             <th>Giá trị</th>
                          </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>ID</td>
                           <td><?= $orderdetail->id;?></td>
                       </tr>
                       <tr>
                           <td>user_id</td>
                           <td><?= $orderdetail->user_id;?></td>
                       </tr>
                       <tr>
                           <td>deliveryaddress</td>
                           <td><?= $orderdetail->deliveryaddress;?></td>
                       </tr>
                       <tr>
                           <td>deliveryname</td>
                           <td><?= $orderdetail->deliveryname;?></td>
                       </tr>
                       <tr>
                           <td>deliveryphone</td>
                           <td><?= $orderdetail->deliveryphone;?></td>
                       </tr>
                     
                           <td>deliveryemail</td>
                           <td><?= $orderdetail->deliveryemail;?></td>
                       </tr>
                       <tr>
                           <td>note</td>
                           <td><?= $orderdetail->note;?></td>
                       </tr>
                       <tr>
                           <td>created_at</td>
                           <td><?= $orderdetail->created_at;?></td>
                       </tr>
                      
                       <tr>
                           <td>updated_at</td>
                           <td><?= $orderdetail->updated_at	;?></td>
                       </tr>
                       <tr>
                           <td>updated_by</td>
                           <td><?= $orderdetail->updated_by;?></td>
                       </tr>
                       <tr>
                           <td>status</td>
                           <td><?= $orderdetail->status;?></td>
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

