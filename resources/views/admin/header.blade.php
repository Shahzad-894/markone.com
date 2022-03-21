<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MarkOne Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/file/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/file/css/sb-admin.css')}}" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">


</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="#">MarkOne Dashboard</a>

        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        <div class="input-group"></div>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">

            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ URL('logoutuser')}}" data-toggle="modal"
                        data-target="#logoutModal">Logout</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/admindashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('products')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('order_list')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="{{ url('order_cencle')}}">
                    <i class="fas fa-fw fa-trash"></i>
                    <span>Orders Cencel</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('sliders')}}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Sliders</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('admin_list')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Admin</span>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('contact_email')}}">
                    <i class="fas fa-fw fa-envelope"></i>
                    <span>Contact Email</span>
                </a>
            </li>


        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">