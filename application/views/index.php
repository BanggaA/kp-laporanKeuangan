<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>srtdash - ICO Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/themify-icons.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/metisMenu.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/owl.carousel.min.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/slicknav.min.css")?>">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="<?= base_url("assets/css/typography.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/default-css.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/styles.css")?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/responsive.css")?>">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

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
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Dashboard</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Transaksi</span></a></li>
                            
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Akun</span></a></li>
                            <li><a href="invoice.html"><i class="ti-receipt"></i> <span>Kategori</span></a></li>
                            
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Laporan</span></a>
                                <ul class="collapse">
                                    <li><a href="table-basic.html">Tampilkan</a></li>
                                    <li><a href="table-layout.html">Rekap</a></li>
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
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
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
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-right">
                                <li><span>Catatan</span></li>
                            </ul>
                        </div>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="<?= base_url("assets/js/vendor/jquery-2.2.4.min.js")?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?= base_url("assets/js/popper.min.js")?>"></script>
    <script src="<?= base_url("assets/js/bootstrap.min.js")?>"></script>
    <script src="<?= base_url("assets/js/owl.carousel.min.js")?>"></script>
    <script src="<?= base_url("assets/js/metisMenu.min.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.slimscroll.min.js")?>"></script>
    <script src="<?= base_url("assets/js/jquery.slicknav.min.js")?>"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="<?= base_url("assets/js/line-chart.js")?>"></script>
    <!-- all pie chart -->
    <script src="<?= base_url("assets/js/pie-chart.js")?>"></script>
    <!-- others plugins -->
    <script src="<?= base_url("assets/js/plugins.js")?>"></script>
    <script src="<?= base_url("assets/js/scripts.js")?>"></script>
</body>

</html>
