<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WHATGOINGON?</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH; ?>public/css/bt.css">
    <link rel="stylesheet" type="text/css" href="<?php echo BASEPATH; ?>public/css/index.css">
  <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/modal.css">
  <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/khoahoc.css">
   <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/phanquyen.css">
    <script src="<?php echo BASEPATH; ?>public/ckeditor/ckeditor.js"></script>
    <script src="<?php echo BASEPATH; ?>public/js/quanlythanhvien.js"></script>

    

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/qltv.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/home" class="nav-link">Home</a>
                </li>
              
				<li class="nav-item d-none d-sm-inline-block">
				<a href='login/runLogout' class="nav-link">Logout</a> 
				</li>
            </ul>

            <!-- SEARCH FORM -->
            <!-- <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form> -->

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a> 
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo BASEPATH; ?>public/dist/img/bach.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                CT-ốc nhồi-XUÂN BÁCH
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">Mua ốc em đi anh</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo BASEPATH; ?>public/dist/img/tuan.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                  Chủ tịch NT karaoke-CẤN TUẤN
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">

                                    Hí anh. Nhà em 3 đời nt-karaoke</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="<?php echo BASEPATH; ?>public/dist/img/tu.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                    Chủ tịch NT QUANG TÚ
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                                    <p class="text-sm">Please call me baby</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 2 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://mvc.anhmok.com/" class="brand-link">
                <img src="<?php echo BASEPATH; ?>public/dist/img/admin.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo BASEPATH; ?>public/dist/img/admin.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Chào
                            <?php if (isset($_SESSION["username"])) {
                                echo $_SESSION["username"];
                            }
                            ?>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="home" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Khóa Học
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>khoahoc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Các khóa học hiện có</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>addkhoahoc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm khóa học mới</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>DKKH" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Khóa Học đã đăng ký</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Lớp Học
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/lophoc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách lớp học</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/addlophoc" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm lớp học</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Thành viên
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                              
                                <li class="nav-item">
                                    <a href="/quanlythanhvien" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách</p>
                                    </a>
                                </li>
                                  <li class="nav-item">
                                    <a href="/addquanlythanhvien" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm Thành Viên</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                   Quiz
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>quiz" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh sách Quiz</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>quiztest" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bài test</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo BASEPATH; ?>quiz/insertQuiz" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm Quiz</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                   Phân quyền
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">1</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                   
                                </li>
                                <li class="nav-item">
                                    <a href="/phanquyen" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phân quyền thành viên</p>
                                    </a>
                                </li>
                            </ul>
                        <li class="nav-item has-treeview">
                            <a href="/baigiang" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                 Bài Giảng
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">3</span>
                                </p>
                            </a>     
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                    <a href="/baigiang" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bài Giảng Hiện Có</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/AddBaiGiang" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thêm Bài Giảng </p>
                                    </a>
                                </li>
                            </ul>                   
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/thongke" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                Thống Kê
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">3</span>
                                </p>
                            </a>     
                            <ul class="nav nav-treeview">
                            <li class="nav-item">
                                    <a href="/thongke" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chất Lượng Học Viên</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/ThongkeBG" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Phân Công Giảng Dạy</p>
                                    </a>
                                </li>
                            </ul>                   
                        </li>
                        
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

