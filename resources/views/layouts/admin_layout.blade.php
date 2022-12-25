<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Админ Панель</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset('/admin/plugins/fontawesome-free/css/all.min.css')}}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href={{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{ asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}>
  <!-- JQVMap -->
  <link rel="stylesheet" href={{ asset('admin/plugins/jqvmap/jqvmap.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('admin/dist/css/adminlte.min.css')}}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{ asset('admin/plugins/daterangepicker/daterangepicker.css')}}>
  <!-- summernote -->
  <link rel="stylesheet" href={{ asset('admin/plugins/summernote/summernote-bs4.min.css')}}>
  <link rel="stylesheet" href="/admin/dist/css/colorbox.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src={{ asset('admin/dist/img/AdminLTELogo.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Главная</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{ asset('admin/dist/img/user2-160x160.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item ">
              <a href="#" class="nav-link ">
                <i class="nav-icon far fa-newspaper"></i>
                <p>
                  Новости
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('news.index')}}" class="nav-link ">
                    <p>Все Новости</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('category.index')}}" class="nav-link ">
                    <p>Все Категории</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('category.create')}}" class="nav-link ">
                      <p>Добавить Категории</p>
                    </a>
                  </li>
                <li class="nav-item">
                    <a href="{{route('news.create')}}" class="nav-link ">
                      <p>Добавить Новости</p>
                    </a>
                  </li>
              
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Админ Панель</h1>
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Новостей</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Просмотреть все Новости<i class="fas fa-arrow-circle-right"></i></a></br>
            </div>
          </div>
         
          <!-- ./col -->
          <!-- <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> -->
          <!-- ./col -->
        </div>
      </div>
    </section>
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{ asset('admin/plugins/jquery/jquery.min.js')}}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- ChartJS -->
<script src={{ asset('admin/plugins/chart.js/Chart.min.js')}}></script>
<!-- Sparkline -->
<script src={{ asset('admin/plugins/sparklines/sparkline.js')}}></script>
<!-- JQVMap -->
<script src={{ asset('admin/plugins/jqvmap/jquery.vmap.min.js')}}></script>
<script src={{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')}}></script>
<!-- jQuery Knob Chart -->
<script src={{ asset('admin/plugins/jquery-knob/jquery.knob.min.js')}}></script>
<!-- daterangepicker -->
<script src={{ asset('admin/plugins/moment/moment.min.js')}}></script>
<script src={{ asset('admin/plugins/daterangepicker/daterangepicker.js')}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}></script>
<!-- Summernote -->
<script src={{ asset('admin/plugins/summernote/summernote-bs4.min.js')}}></script>
<!-- overlayScrollbars -->
<script src={{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}></script>
<!-- AdminLTE App -->
<<script src={{ asset('admin/dist/js/adminlte.js')}}></script>
<!-- AdminLTE for demo purposes -->
<<script src={{ asset('admin/dist/js/demo.js')}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<<script src={{ asset('admin/dist/js/pages/dashboard.js')}}></script>
<script src="/admin/dist/js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
<script src="https://cdn.tiny.cloud/1/ocd71rynej6hu6kl8p0c32m4xzoayqz7hm6414zcbshcoxw6/tinymce/5/tinymce.min.js" 
referrerpolicy="origin"></script>
<script type="text/javascript" src="/packages/barryvdh/elfinder/js/standalonepopup.js"></script>
  <script src="/admin/admin.js"></script>
</body>
</html>
