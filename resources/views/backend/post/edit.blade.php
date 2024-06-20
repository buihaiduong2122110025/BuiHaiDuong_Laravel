@extends('layouts.admin')
@section('title', 'Trang Chủ')


@section('content')
<div>
    <div class="content-wrapper">
        <!-- CONTENT -->
        <form action="{{ route('admin.post.update',['id'=>$post->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method("put")
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <strong class="text-dark text-lg">CẬT NHÂT THƯƠNG HIỆU</strong>
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
                                <button type="submit" name="create" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i> Lưu
                                </button>
                                <a class="btn btn-sm btn-info" href="{{ route('admin.post.index') }}">
                                    <i class="fas fa-arrow-left"></i> Quay lại
                                </a>

                            </div>
                        </div>
                    </div>
                    <tbody>

                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title">Tiêu đề</label>
                                <input type="text" value="{{ old('title',$post->title) }}" name="title" id="title" class="form-control">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="detail">Chi tiết</label>
                                <textarea name="detail" id="detail" rows="8" class="form-control">{{ old('detail',$post->detail) }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="description">Mô tả</label>
                                <textarea name="description" id="description" class="form-control">{{ old('description',$post->description) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="topic_id">Chủ đề</label>
                                <select name="topic_id" id="topic_id" class="form-control">
                                    <option value="">Chọn chủ đề</option>
                                    @foreach ($topic_id as $topic_id)
                                    <option value="{{ $topic_id->id }}"
                                        {{ $post->topic_id == $topic_id->id ? 'selected' : '' }}>
                                        {{ $topic_id->name }}
                                    </option>
                                @endforeach
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type">Kiểu</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="post">Bài viết</option>
                                    <option value="page">Trang đơn</option>
                                    {{ old('type',$post->type) }}
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="image">Hình</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="status">Trạng thái</label>
                                <select name="status" id="status" class="form-control">
                                    <option {{ ($post->status==2)?"selected":""}} value="2">Chưa xuất bản</option>
                                    <option {{ ($post->status==1)?"selected":""}} value="1">Xuất bản</option>
                                </select>
                            </div>

                        </div>
                </div>
            </section>

            </tbody>
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

