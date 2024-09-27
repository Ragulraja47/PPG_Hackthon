<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon icon -->
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="assets/images/favicon.png"
        />
        <title>
            Matrix Template - The Ultimate Multipurpose admin template
        </title>
        <!-- Custom CSS -->
        <link href="assets/libs/flot/css/float-chart.css" rel="stylesheet" />
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet" />

<!-- dashboard -->        
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
        <style>
            /* Fix the footer at the bottom */
            .footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100%;
                text-align: center;
                background-color: #f1f1f1;
                padding: 10px 0;
                z-index: 1000;
            }

            #main-wrapper {
                padding-bottom: 50px;
            }
        </style>
    </head>

    <body>
        <!-- Preloader - style you can find in spinners.css -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>

        <!-- Main wrapper - style you can find in pages.scss -->
        <div id="main-wrapper">
            <!-- Topbar header - style you can find in pages.scss -->
            <header class="topbar" data-navbarbg="skin5">
                <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                    <div class="navbar-header" data-logobg="skin5">
                        <!-- This is for the sidebar toggle which is visible on mobile only -->
                        <a
                            class="nav-toggler waves-effect waves-light d-block d-md-none"
                            href="javascript:void(0)"
                        >
                            <i class="ti-menu ti-close"></i>
                        </a>
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <!-- Logo icon -->
                            <b class="logo-icon p-l-10">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img
                                    src="assets/images/logo-icon.png"
                                    alt="homepage"
                                    class="light-logo"
                                />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img
                                    src="assets/images/logo-text.png"
                                    alt="homepage"
                                    class="light-logo"
                                />
                            </span>
                        </a>
                        <!-- End Logo -->

                        <!-- Toggle which is visible on mobile only -->
                        <a
                            class="topbartoggler d-block d-md-none waves-effect waves-light"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <!-- End Logo -->

                    <div
                        class="navbar-collapse collapse"
                        id="navbarSupportedContent"
                        data-navbarbg="skin5"
                    >
                        <!-- toggle and nav items -->

                        <ul class="navbar-nav float-left mr-auto">
                            <li class="nav-item d-none d-md-block">
                                <a
                                    class="nav-link sidebartoggler waves-effect waves-light"
                                    href="javascript:void(0)"
                                    data-sidebartype="mini-sidebar"
                                >
                                    <i class="mdi mdi-menu font-24"></i>
                                </a>
                            </li>
                        </ul>

                        <!-- Right side toggle and nav items -->

                        <ul class="navbar-nav float-right">
                            <!-- User profile and search -->
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                    href=""
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <img
                                        src="assets/images/users/1.jpg"
                                        alt="user"
                                        class="rounded-circle"
                                        width="31"
                                    />
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right user-dd animated"
                                >
                                    <a
                                        class="dropdown-item"
                                        href="javascript:void(0)"
                                    >
                                        <i
                                            class="fa fa-power-off m-r-5 m-l-5"
                                        ></i>
                                        Logout</a
                                    >
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- End Topbar header -->

            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <aside class="left-sidebar" data-sidebarbg="skin5">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav" class="p-t-30">
                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="index.html"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span class="hide-menu">Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="widgets.html"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-chart-bubble"></i>
                                    <span class="hide-menu">Mentees</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="tables.html"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-border-inside"></i>
                                    <span class="hide-menu">Tables</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="grid.html"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-blur-linear"></i>
                                    <span class="hide-menu">Full Width</span>
                                </a>
                            </li>

                            <li class="sidebar-item">
                                <a
                                    class="sidebar-link has-arrow waves-effect waves-dark"
                                    href="javascript:void(0)"
                                    aria-expanded="false"
                                >
                                    <i class="mdi mdi-receipt"></i>
                                    <span class="hide-menu">Forms </span>
                                </a>
                                <ul
                                    aria-expanded="false"
                                    class="collapse first-level"
                                >
                                    <li class="sidebar-item">
                                        <a
                                            href="form-basic.html"
                                            class="sidebar-link"
                                        >
                                            <i class="mdi mdi-note-outline"></i>
                                            <span class="hide-menu">
                                                Form Basic</span
                                            >
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a
                                            href="form-wizard.html"
                                            class="sidebar-link"
                                        >
                                            <i class="mdi mdi-note-plus"></i>
                                            <span class="hide-menu">
                                                Form Wizard</span
                                            >
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Dashboard</h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="#">Home</a>
                                        </li>
                                        <li
                                            class="breadcrumb-item active"
                                            aria-current="page"
                                        >
                                            Library
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Sales Cards  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-cyan text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-view-dashboard"></i>
                                    </h1>
                                    <h6 class="text-white">Name</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-success text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-chart-areaspline"></i>
                                    </h1>
                                    <h6 class="text-white">Department</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-warning text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-collage"></i>
                                    </h1>
                                    <h6 class="text-white">D.O.B</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-border-outside"></i>
                                    </h1>
                                    <h6 class="text-white">No.of.mentees</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-info text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-arrow-all"></i>
                                    </h1>
                                    <h6 class="text-white">Mail</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="col-md-6 col-lg-4 col-xlg-3">
                            <div class="card card-hover">
                                <div class="box bg-danger text-center">
                                    <h1 class="font-light text-white">
                                        <i class="mdi mdi-receipt"></i>
                                    </h1>
                                    <h6 class="text-white">Status</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>


                    <!-----------------------------------DashBoard---------------------------------------->
                    <div class="tab-pane p-20 active show" id="dashboard" role="tabpanel">
                        <div class="row">

                        </div><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-3 mb-3">
                                        <div class="cir">
                                            <div class="bo">
                                                <div class="content1">
                                                    <div class="stats-box text-center p-3"
                                                        style="background-color:rgb(252, 119, 71);">
                                                        <i class="fas fa-bell m-b-5 font-20"></i>
                                                        <h1 class="m-b-0 m-t-5"></h1>
                                                        <small class="font-light">Pending</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <div class="cir">
                                            <div class="bo">
                                                <div class="content1">
                                                    <div class="stats-box text-center p-3"
                                                        style="background-color:rgb(241, 74, 74);">
                                                        <i class="fas fa-exclamation m-b-5 font-16"></i>
                                                        <h1 class="m-b-0 m-t-5"></h1>
                                                        <small class="font-light">work in progress</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <div class="cir">
                                            <div class="bo">
                                                <div class="content1">
                                                    <div class="stats-box text-center p-3"
                                                        style="background-color:rgb(70, 160, 70);">
                                                        <i class="fas fa-check m-b-5 font-20"></i>
                                                        <h1 class="m-b-0 m-t-5"></h1>
                                                        <small class="font-light">Completed</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 mb-3">
                                        <div class="cir">
                                            <div class="bo">
                                                <div class="content1">
                                                    <div class="stats-box text-center p-3"
                                                        style="background-color: rgb(187, 187, 35);">
                                                        <i class="fas fa-redo m-b-5 font-20"></i>
                                                        <h1 class="m-b-0 m-t-5"></h1>
                                                        <small class="font-light">Re-assigned</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <footer class="footer text-center">SIH-2024 MKCE</footer>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- All Jquery -->
        <script src="assets/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="assets/extra-libs/sparkline/sparkline.js"></script>
        <!--Wave Effects -->
        <script src="dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
    </body>
</html>