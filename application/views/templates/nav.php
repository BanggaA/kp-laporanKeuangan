
<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="<?= base_url("assets/images/icon/logo.png")?>" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="<?php if ($nav == "Dashboard") {echo "active";}?>"><a href="<?= base_url('Dashboard'); ?>"><i class="ti-receipt"></i> <span>Dashboard</span></a></li>
                            <li class="<?php if ($nav == "Transaksi") {echo "active";}?>"><a href="<?= base_url('Transaksi'); ?>"><i class="ti-receipt"></i> <span>Transaksi</span></a></li>
                            
                            <li class="<?php if ($nav == "Akun") {echo "active";}?>"><a href="<?= base_url('Akun'); ?>"><i class="ti-receipt"></i> <span>Akun</span></a></li>
                            <li class="<?php if ($nav == "Kategori") {echo "active";}?>"><a href="<?= base_url('Kategori'); ?>"><i class="ti-receipt"></i> <span>Kategori</span></a></li>
                            
                            <li class="<?php if ($nav == "Tampilkan" || $nav == "Rekap") {echo "active";}?>">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Laporan</span></a>
                                <ul class="collapse">
                                    <li class="<?php if ($nav == "Tampilkan") {echo "active";}?>"><a href="<?= base_url('Tampilkan'); ?>">Tampilkan Transaksi</a></li>
                                    <li class="<?php if ($nav == "Rekap") {echo "active";}?>"><a href="<?= base_url('Rekap'); ?>">Rekap</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
            <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left my-2">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="dropdown col-sm-6 col-sm-4 clearfix ">
                        <button class="btn btn-flat btn-primary dropdown-toggle pull-right" type="button" data-toggle="dropdown">
                            Akun
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?= site_url('akun/profil'); ?>">Profil</a>
                            <a class="dropdown-item" href="<?= site_url('akun/logout'); ?>">Logout</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">

                <div class="row align-items-center">
                    <div class="col-sm-12 py-3">
                        <div class="breadcrumbs-area clearfix">
                        <?php if($nav == "Dashboard") :?>
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>V0.0</span></li>
                            </ul>
                        <?php elseif($nav == "Transaksi") :?>
                            <h4 class="page-title pull-left">Transaksi</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Menampilkan Daftar Transaksi</span></li>
                            </ul>
                        <?php elseif($nav == "Kategori") :?>
                            <h4 class="page-title pull-left">Kategori</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Mengelola kategori toko</span></li>
                            </ul>
                        <?php elseif($nav == "Akun") :?>
                            <h4 class="page-title pull-left">Akun</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Mengelola akun penguna</span></li>
                            </ul>
                        <?php elseif($nav == "Tampilkan") :?>
                            <h4 class="page-title pull-left">Tampilkan Transaksi</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Menampilkan Daftar Transaksi Pemasukan Pengeluaran</span></li>
                            </ul>
                        <?php elseif($nav == "Rekap") :?>
                            <h4 class="page-title pull-left">Rekap</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Menampilkan Rekap Pemasukan & Pengeluaran</span></li>
                            </ul>
                        <?php elseif($nav == "profil") :?>
                            <h4 class="page-title pull-left">profil</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Menampilkan data profil</span></li>
                            </ul>
                        <?php endif;?>
                        </div>
                        <span></span>
                    </div>
                </div>
            </div>