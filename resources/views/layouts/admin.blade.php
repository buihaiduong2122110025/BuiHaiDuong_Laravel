<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/backend.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/path/to/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poetsen+One&family=Raleway:ital,wght@0,100..900;1,100..900&family=Reddit+Mono:wght@200..900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Teachers:ital,wght@0,400..800;1,400..800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('header')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <header>
            <div>

                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                                    class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="{{ route('admin.dashbroad.index') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="far fa-user"></i> Quản lý
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website.logout') }}">
                                <i class="fas fa-power-off"></i> Thoát
                            </a>
                        </li>
                    </ul>
                </nav>
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <a href="{{ route('admin.dashbroad.index') }}" class="brand-link text-decoration-none">
                        {{-- <img src="./img/profile.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
                        <div class="font-weight-light text-center text-decoration-none">
                            <h3 class="text-decoration-none">Admin</h3>
                        </div>
                    </a>
                    <div class="sidebar">
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <div class="image">
                                {{-- <img src="../public/img/profile.png" class="img-circle elevation-2" alt="User Image"> --}}
                            </div>
                            <div class="info">
                                <a href="#" class="d-block text-decoration-none  "><i class="fas fa-user"></i>
                                    @if (Auth::check())
                                        {{ Auth::user()->name }}
                                    @endif
                                </a>
                            </div>
                        </div>
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                                data-accordion="false">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Sản phẩm
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.product.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Tất cả sản phẩm</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.category.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Danh mục</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.brand.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thương hiệu</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-copy"></i>
                                        <p>
                                            Bài viết
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.post.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Tất cả bài viết</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.topic.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Chủ đề</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.order.index') }}" class="nav-link">
                                        <i class="fas fa-shopping-bag"></i>
                                        <p>Giỏ hàng</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{ route('admin.orderdetail.index') }}" class="nav-link">
                                        <i class="fas fa-info-circle"></i>
                                        <p>Chi Tiết Giỏ hàng</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{ route('admin.contact.index') }}" class="nav-link">
                                        <i class="fas fa-id-card"></i>
                                        <p>Liên hệ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link">
                                        <i class="nav-icon fas fa-edit"></i>
                                        <p>
                                            Giao diện
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.menu.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Menu</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.banner.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Banner</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon fas fa-table"></i>
                                        <p>
                                            Thành viên
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('admin.user.index') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Tất cả thành viên</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('admin.user.create') }}" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>Thêm thành viên</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-header">LABELS</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-danger"></i>
                                        <p class="text">Important</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-warning"></i>
                                        <p>Warning</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="nav-icon far fa-circle text-info"></i>
                                        <p>Informational</p>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>

            </div>
        </header>



        <main>
            @yield('content')
        </main>




        {{-- <footer>
        <div>

            <footer class="main-footer bg-dark">
                <div class="float-right d-none d-sm-block">
                  <b>Version</b> 3.2.0
                </div>
                <strong>Thiết kế bởi: BÙI HẢI DƯƠNG</strong>
              </footer>

               </div>

               <script src="{{ asset('jquery/jquery-3.7.0.min.js') }}"></script>
               <script src="{{ asset('datatables/js/dataTables.min.js') }}"></script>
               <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
               <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
               <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>



               <script src="../public/jquery/jquery-3.7.0.min.js"></script>
               <script src="../public/datatables/js/dataTables.min.js"></script>
               <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
               <script src="../public/dist/js/adminlte.min.js"></script>
               <script>
                  $(document).ready(function () {
                     $('#mytable').DataTable();
                  });
               </script>
            </body> 
        </div>
    </footer> --}}
        <footer>
            <footer class="main-footer ">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.2.0
                </div>
                <strong>Thiết kế bởi: BÙI HẢI DƯƠNG</strong>
            </footer>
    </div>
    @yield('footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('jquery/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('datatables/js/dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/adminlte.min.js"></script>

</body>

</html>
