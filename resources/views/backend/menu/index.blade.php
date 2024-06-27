@extends('layouts.admin')
@section('title', 'Menu')
@section('content')
    <div>
        <div>

            <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="content-wrapper">
                    <!-- CONTENT -->
                    <section class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1>Tất cả menu</h1>
                                    {{-- <a class="btn btn-sm btn-primary" href="{{ route('admin.menu.create') }}"> --}}
                                    {{-- <i class="fas fa-plus"></i> Thêm menu
                                </a> --}}
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
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
                                        <a class="btn btn-sm btn-danger" href="{{ route('admin.menu.trash') }}">
                                            <i class="fas fa-trash"></i> Thùng rác
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="accordion bg-dark" id="accordionExample">
                                            <div class="card p-3 bg-dark">
                                                <label for="position">Vị trí</label>
                                                <select name="position" id="position" class="form-control" required>
                                                    <option value="mainmenu">Main Menu</option>
                                                    <option value="footermenu">Footer Menu</option>
                                                </select>
                                            </div>

                                            <div class="card bg-dark">
                                                <div class="card-header  text-decoration-none link-unstyled"
                                                    id="headingCategory">
                                                    <a class="d-block text-decoration-none text-light"
                                                        data-toggle="collapse" data-target="#collapseCategory"
                                                        aria-expanded="true" aria-controls="collapseCategory">
                                                        Danh mục
                                                    </a>
                                                </div>
                                                <div id="collapseCategory" class="collapse"
                                                    aria-labelledby="headingCategory" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @foreach ($list_category as $category)
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="categoryid[]" value="{{ $category->id }}"
                                                                    id="category{{ $category->id }}">
                                                                <label class="form-check-label"
                                                                    for="category{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                        <div class="mb-3">
                                                            <input type="submit" name="createCategory"
                                                                class="btn btn-success" value="Thêm menu"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card bg-dark">
                                                <div class="card-header" id="headingBrand">
                                                    <a class="d-block text-decoration-none text-light"
                                                        data-toggle="collapse" data-target="#collapseBrand"
                                                        aria-expanded="true" aria-controls="collapseBrand">
                                                        Thương hiệu
                                                    </a>
                                                </div>
                                                <div id="collapseBrand" class="collapse" aria-labelledby="headingBrand"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @foreach ($list_brand as $brand)
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="brandid[]" value="{{ $brand->id }}"
                                                                    id="brand{{ $brand->id }}">
                                                                <label class="form-check-label"
                                                                    for="brand{{ $brand->id }}">
                                                                    {{ $brand->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                        <div class="mb-3">
                                                            <input type="submit" name="createBrand"
                                                                class="btn btn-success" value="Thêm menu"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card bg-dark">
                                                <div class="card-header" id="headingTopic">
                                                    <a class="d-block text-decoration-none text-light"
                                                        data-toggle="collapse" data-target="#collapseTopic"
                                                        aria-expanded="true" aria-controls="collapseTopic">
                                                        Chủ đề
                                                    </a>
                                                </div>
                                                <div id="collapseTopic" class="collapse" aria-labelledby="headingTopic"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @foreach ($list_topic as $topic)
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="topicid[]" value="{{ $topic->id }}"
                                                                    id="topic{{ $topic->id }}">
                                                                <label class="form-check-label"
                                                                    for="topic{{ $topic->id }}">
                                                                    {{ $topic->name }}
                                                                </label>
                                                            </div>
                                                        @endforeach
                                                        <div class="mb-3">
                                                            <input type="submit" name="createTopic"
                                                                class="btn btn-success" value="Thêm menu"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card bg-dark">
                                                <div class="card-header " id="headingPage">
                                                    <a class="d-block text-decoration-none text-light"
                                                        data-toggle="collapse" data-target="#collapsePage"
                                                        aria-expanded="true" aria-controls="collapsePage">
                                                        Trang đơn
                                                    </a>
                                                </div>
                                                <div id="collapsePage" class="collapse" aria-labelledby="headingPage"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        @foreach ($list_post as $post)
                                                            <div class="form-check mb-2">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="postid[]" value="{{ $post->id }}"
                                                                    id="post{{ $post->id }}">
                                                                <label class="form-check-label"
                                                                    for="post{{ $post->id }}">
                                                                    {{ $post->title }}
                                                                </label>
                                                            </div>
                                                        @endforeach 
                                                        <div class="mb-3">
                                                            <input type="submit" name="createPage"
                                                                class="btn btn-success" value="Thêm menu"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card bg-dark">
                                                <div class="card-header" id="headingCustom">
                                                    <a class="d-block text-decoration-none text-light"
                                                        data-toggle="collapse" data-target="#collapseCustom"
                                                        aria-expanded="true" aria-controls="collapseCustom">
                                                        Tùy liên kết
                                                    </a>
                                                </div>
                                                <div id="collapseCustom" class="collapse" aria-labelledby="headingCustom"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="name">Tên menu</label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-control">
                                                            {{-- @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror --}}
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="link">Liên kết</label>
                                                            <input type="text" name="link" id="link"
                                                                class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="submit" name="createCustom"
                                                            class="btn btn-success" value="Thêm menu"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end card -->

                                            <div class="card p-3 bg-dark">
                                                <label for="status">Trạng thái</label>
                                                <select name="status" id="status" class="form-control" required>
                                                    <option value="2">Chưa xuất bản</option>
                                                    <option value="1">Xuất bản</option>
                                                </select>
                                            </div>
                                        </div>
            </form>
        </div>


        <div class="col-md-8">

            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center bg-dark" style="width:30px">#</th>

                        <th class="text-center bg-dark">Tên Menu</th>
                        <th class="text-center bg-dark">Liên kết</th>
                        <th class="text-center bg-dark">Vị trí</th>

                        <th class="text-center bg-dark" style="width:200px">Chức năng</th>
                        <th class="text-center bg-dark" style="width:30px">ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $row)
                        @php
                            $args = ['id' => $row->id];
                        @endphp

                        <tr>
                            <td class="text-center">
                                <input type="checkbox" />
                            </td>
                            <td class="text-center">
                                {{ $row->name }}
                            </td>
                            <td class="text-center">
                                {{ $row->link }}
                            </td>

                            <td class="text-center">
                                {{ $row->position }}
                            </td>


                            <td class="text-center">
                                @if ($row->status == 2)
                                    <a href="{{ route('admin.menu.status', $args) }}" class="btn btn-sm btn-dark">
                                        <i class="fas fa-toggle-off"></i>
                                    </a>
                                @else
                                    <a href="{{ route('admin.menu.status', $args) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-toggle-on"></i>
                                    </a>
                                @endif
                                <a href="{{ route('admin.menu.show', $args) }}"class="btn btn-sm btn-info">
                                    <i class="far fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.menu.edit', $args) }}" class="btn btn-sm btn-primary">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="{{ route('admin.menu.delete', $args) }}" class="btn btn-sm btn-danger">
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
    </section>
    <!-- /.CONTENT -->
    </div>
    </form>
    </div>
    </div>
@endsection
@section('header')
    <link rel="stylesheet" href="admin.css">
@endsection
