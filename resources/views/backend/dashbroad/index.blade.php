@extends('layouts.admin')
@section('title', 'Quản Trị')
@section('content')

    <div>

        <div class="content-wrapper">
            <!-- CONTENT -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Blank Page</h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item  "><a  class="text-decoration-none text-black">Home</a></li>
                      <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                  </div>
                </div>
              </div>
            </section>
            <section class="content">
              <div class="card">
                <div class="card-header">
                  <div class="row">
                    <div class="col-12 text-right">
                      Database
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  Content
                </div>
              </div>
            </section>
            <!-- /.CONTENT -->
          </div> 
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="home.css">
@endsection
