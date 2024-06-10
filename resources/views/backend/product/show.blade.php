@extends('layouts.admin')
@section('title', 'Category')
@section('content')
<div class="content-wrapper">

    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
             <strong class="text-dark text-lg">CHI TIẾT SẢN PHẨM</strong>
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
          <a href="index.php?option=product" class="btn btn-sm btn-info">
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Về danh sách
             </a>
          </div>
       </div>
          <div class="card-body p-2">
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th style="width:30%">Tên trường</th>
                      <th>Giá trị</th>
                   </tr>
                </thead>
                @foreach ($list as $list)
                <tbody>
                        
                             
                      
                         <tr>
                            <td>ID</td>
                            <td>{{ $list->id}}</td>
                         </tr>
                         <tr>
                            <td>category_id</td>
                            <td>{{ $list->category_id}}</td>
                         </tr>
                         <tr>
                            <td>brand_id</td>
                            <td>{{ $list->brand_id}}</td>
                         </tr>
                         <tr>
                            <td>name</td>
                            <td>{{ $list->name}}</td>
                         </tr>
                         <tr>
                            <td>slug</td>
                            <td>{{ $list->slug}}</td>
                         </tr>
                         <tr>
                            <td>price</td>
                            <td>{{ $list->price}}</td>
                         </tr>
                         <tr>
                            <td>pricesale</td>
                            <td>{{ $list->pricesale}}</td>
                         </tr>
                         <tr>
                            <td>image</td>
                            <td><img class="img-fluid" src="../public/images/product/{{$list->image}}" 
                            alt="{{$list->image}}"></td>
                         </tr>
                         <tr>
                            <td>qty</td>
                            <td>{{ $list->qty}}</td>
                         </tr>
                         <tr>
                            <td>detail</td>
                            <td>{{ $list->detail}}</td>
                         </tr>
                         <tr>
                            <td>description</td>
                            <td>{{ $list->description}}</td>
                         </tr>
                         <tr>
                            <td>created_at</td>
                            <td>{{ $list->created_at}}</td>
                         </tr>
                         <tr>
                            <td>created_by</td>
                            <td>{{ $list->created_by}}</td>
                         </tr>
                         <tr>
                            <td>updated_at</td>
                            <td>{{ $list->updated_at}}</td>
                         </tr>
                         <tr>
                            <td>updated_by</td>
                            <td>{{ $list->updated_by}}</td>
                         </tr>
                         <tr>
                            <td>status</td>
                            <td>{{ $list->status}}</td>
                         </tr>
                        
                </tbody>
                @endforeach
             </table>
          </div>
       </div>
    </section>
 </div>


 @endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection

@section('footer')
    <link rel="stylesheet" href="admin.css">
@endsection
