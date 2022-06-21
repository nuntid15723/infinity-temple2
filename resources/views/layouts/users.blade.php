<!DOCTYPE html>
<html lang="en">
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Infinity Phenomenal Software</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo.svg">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
    <script src="./js/plugins-init/bootstrap-input-spinner.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Kanit:wght@500;700&family=Mitr:wght@200&family=Prompt:wght@300&family=Roboto+Condensed&display=swap"
        rel="stylesheet">

    <style>
        .nk-sidebar .metismenu>li:hover i,
        .nk-sidebar .metismenu>li:focus i,
        .nk-sidebar .metismenu>li.active i {
            color: #d5a639 !important;
        }

        .nk-sidebar .metismenu>li a>i {
            font-size: 0.95rem;
            display: inline-block;
            vertical-align: middle;
            padding: 0 0.4375rem 0 0;
            color: #ffc742;
        }
    </style>
    {{-- <style>
            body{
                font-family: 'Kanit', sans-serif; font-weight:600;
            }
        </style> --}}
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        {{-- <style>
            body{
                font-family: 'Kanit', sans-serif; font-weight:600;
            }
        </style> --}}
        <!--*******************
             Preloader start
            ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3"
                        stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
                 Preloader end
             ********************-->


        <!--**********************************
                 Main wrapper start
            ***********************************-->
        <div id="main-wrapper">


            <!--**********************************
                    Nav header start
                ***********************************-->
            <div class="nav-header" style="background-color: rgb(255, 255, 255);">
                <div class="brand-logo">
                    <a href="{{ url('/') }}">
                        <b class="logo-abbr" style="margin: -7px;"><img src="images/logo.svg" alt=""> </b>
                        <span class="logo-compact"><img src="./images/logo-text-removebg-preview.png" alt=""></span>
                        <span class="brand-title">
                            <img src="images/logo-text-removebg-preview.png" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!--**********************************
                        Nav header end
                ***********************************-->

            <!--**********************************
                         Header start
                ***********************************-->
            <div class="header">
                <div class="header-content clearfix" style="font-family: 'Prompt', sans-serif; font-weight:400;">

                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="images/user/form-user.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/profileuser') }}"><i class="icon-user"></i>
                                                    <span>Profile</span></a>
                                            </li>
                                            <hr class="my-2">
                                            <li>
                                                <a href="javascript:void()">
                                                    <i class="icon-envelope-open"></i> <span>Inbox</span>
                                                    <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                                </a>
                                            </li>
                                            <hr class="my-2">
                                            <li>
                                                <a href="{{ url('/') }}"><i class="icon-lock"></i> <span>Lock
                                                        Screen</span></a>
                                            </li>
                                            <hr class="my-2">
                                            <li><a href="{{ url('logout') }}" i class="icon-key"></i>
                                                    <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown d-none d-md-flex">
                                <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                    <span>name</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                                </a>
                                <div class="drop-down dropdown-user animated fadeIn  dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="{{ url('/profileuser') }}"><i class="icon-user"></i>
                                                    <span>Profile</span></a>
                                            </li>
                                            <hr class="my-2">

                                            <hr class="my-2">
                                            <li><a href="{{ url('logout') }}"><i class="icon-key"></i>
                                                    <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">3 New Messages</span>
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-1">3</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg"
                                                        alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Saiful Islam</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg"
                                                        alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Adam Smith</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Can you do me a favour?</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg"
                                                        alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Barak Obama</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg"
                                                        alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Hilari Clinton</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hello</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-pill gradient-2">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">2 New Notifications</span>
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-2">5</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                            class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events near you</h6>
                                                        <span class="notification-text">Within next 5 days</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                            class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Started</h6>
                                                        <span class="notification-text">One hour ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                            class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Ended Successfully</h6>
                                                        <span class="notification-text">One hour ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2"><i
                                                            class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events to Join</h6>
                                                        <span class="notification-text">After two days</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

            <!--**********************************
            Sidebar start
        ***********************************-->
            <div class="nk-sidebar " style="font-family: 'Kanit', sans-serif; font-weight:400;">
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Dashboard</li>
                        <li>
                            <a class="has" href="{{ url('/homeuser') }}" alt="">
                                <i class="bi bi-house-door-fill menu-icon; mr-2 " style="font-size: 1.8rem;"></i><span
                                    class="nav-text" style="font-size: 20px;">หน้าหลัก</span>
                            </a>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has" href="{{ url('/formuser') }}" alt="">
                                <i class="bi bi-file-earmark-text-fill menu-icon  mr-2 "
                                    style="font-size: 1.8rem;"></i><span class="nav-text "
                                    style="font-size: 20px;">แบบฟอร์มใบลา</span>
                            </a>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has" href="{{ url('/history') }}" alt="">
                                <i class="bi bi-bar-chart-line-fill menu-icon mr-2 "
                                    style="font-size: 1.8rem;"></i><span class="nav-text "
                                    style="font-size: 20px;">สรุปการลา</span>
                            </a>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has" href="{{ url('logout') }}" alt="">
                                <i class="bi bi-box-arrow-right menu-icon mr-2 " style="font-size: 1.8rem;"></i><span
                                    class="nav-text " style="font-size: 20px;">ออกจากระบบ</span>
                            </a>
                        </li>
                        <li class="nav-label ">Apps</li>
                        <li>
                            <a href="widgets.html " aria-expanded="false ">
                                <i class="icon-badge menu-icon " style="font-size: 1.8rem;"></i><span
                                    class="nav-text " style="font-size: 20px;">Widget</span>
                            </a>
                        </li>
                </div>
            </div>
            <!--**********************************
                            Sidebar end
                ***********************************-->

            <!--**********************************
                        Content body start
                ***********************************-->
            <div class="content-body ">
                @yield('content')
            </div>
            <!--**********************************
                         Content body end
                ***********************************-->


            <!--**********************************
                         Footer start
                ***********************************-->
            <div class="footer ">
                <div class="copyright ">
                    <p>Copyright &copy; Designed & Developed by <a
                            href="https://themeforest.net/user/quixlab ">Quixlab</a>
                        2018</p>
                </div>
            </div>
            <!--**********************************
                         Footer end
                ***********************************-->
        </div>
        <!--**********************************
                    Main wrapper end
             ***********************************-->

        <!--**********************************
                     Scripts
        *   **********************************-->
        <script src="plugins/common/common.min.js "></script>
        <script src="js/custom.min.js "></script>
        <script src="js/settings.js "></script>
        <script src="js/gleek.js "></script>
        <script src="js/styleSwitcher.js "></script>

        <!-- Chartjs -->
        <script src="./plugins/chart.js/Chart.bundle.min.js "></script>
        <!-- Circle progress -->
        <script src="./plugins/circle-progress/circle-progress.min.js "></script>
        <!-- Datamap -->
        <script src="./plugins/d3v3/index.js "></script>
        <script src="./plugins/topojson/topojson.min.js "></script>
        <script src="./plugins/datamaps/datamaps.world.min.js "></script>
        <!-- Morrisjs -->
        <script src="./plugins/raphael/raphael.min.js "></script>
        <script src="./plugins/morris/morris.min.js "></script>
        <!-- Pignose Calender -->
        <script src="./plugins/moment/moment.min.js "></script>
        <script src="./plugins/pg-calendar/js/pignose.calendar.min.js "></script>
        <!-- ChartistJS -->
        <script src="./plugins/chartist/js/chartist.min.js "></script>
        <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js "></script>

        <script src="./js/dashboard/dashboard-1.js "></script>

</body>


</html>
