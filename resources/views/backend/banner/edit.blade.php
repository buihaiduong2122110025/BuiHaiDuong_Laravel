@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <div class="content-wrapper">
        <!-- CONTENT -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tất cả banner</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashbroad.index') }}">Home</a></li>
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
                                <a class="btn btn-sm btn-info" href="{{ route('admin.banner.index') }}">
                                <i class="fas fa-arrow-left"></i> Quay lại
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                            <form action="{{ route('admin.banner.update',['id'=>$banner->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method("put")
                                <div class="mb-3">
                                    <label for="name">Tên banner</label>
                                    <input type="text" value="{{ old('name',$banner->name) }}" name="name" id="name" class="form-control">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="link">Liên kết</label>
                                    <input type="text" value="{{ old('link',$banner->link) }}" name="link" id="link" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="description">Mô tả</label>
                                    <textarea name="description" id="description" class="form-control">{{ old('description',$banner->description) }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="position">Vị trí</label>
                                    <select name="position" id="position" class="form-control">
                                        <option value="0">None</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="image">Hình</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="status">Trạng thái</label>
                                    <select name="status" id="status" class="form-control">
                                        <option {{ ($banner->status==2)?"selected":""}} value="2">Chưa xuất bản</option>
                                        <option {{ ($banner->status==1)?"selected":""}} value="1">Xuất bản</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="create" class="btn btn-success">Lưu</button>
                                </div>
                            </form>
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

