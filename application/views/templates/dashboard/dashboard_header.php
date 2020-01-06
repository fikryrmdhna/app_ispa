<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/RoyalUI/template/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/RoyalUI/template/vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Datatables -->
    <link href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.css" rel="stylesheet">
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- End plugin css for this page -->
    
    <!-- My Icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/RoyalUI/template/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/RoyalUI/template/images/lung.png" />
    <!-- Highchart -->
    <script src="https://code.highcharts.com/highcharts.src.js"></script>


</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <center><a class="navbar-brand brand-logo mr-5" href="index.html"><img src="<?= base_url() ?>assets/RoyalUI/template/images/sispak-stroke.png" class="mr-2" alt="logo" style="width:112.5px; height:75px;" /></a></center>
                <center><a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?= base_url() ?>assets/RoyalUI/template/images/lung.png" alt="logo" style="width:100%" /></a></center>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end" style="color:white;">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="ti-view-list" style="color:white;"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="<?= base_url() ?>assets/RoyalUI/template/images/faces/face28.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="ti-view-list"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <i class="ti-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('penyakit') ?>">
                            <i class="ti-clipboard menu-icon"></i>
                            <span class="menu-title">Penyakit</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('gejala') ?>">
                            <i class="ti-pulse menu-icon"></i>
                            <span class="menu-title">Gejala</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="ti-files menu-icon"></i>
                            <span class="menu-title">Data</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="<?= base_url('data_latih') ?>">Data Latih</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?= base_url('data_uji') ?>">Data Uji</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                            <i class="fa fa-sign-out menu-icon"></i>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>

                </ul>
            </nav>