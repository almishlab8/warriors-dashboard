<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta
            name="description"
            content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta
            name="keywords"
            content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Project Dashboard - Robust Free Bootstrap Admin Template</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" type="text/css"/>

        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
        <link
            rel="apple-touch-icon"
            sizes="60x60"
            href="{{asset('/files/app-assets/images/ico/apple-icon-60.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="76x76"
            href="{{asset('/files/app-assets/images/ico/apple-icon-76.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="120x120"
            href="{{asset('/files/app-assets/images/ico/apple-icon-120.png')}}">
        <link
            rel="apple-touch-icon"
            sizes="152x152"
            href="{{asset('/files/app-assets/images/ico/apple-icon-152.png')}}.">
        <link
            rel="shortcut icon"
            type="image/x-icon"
            href="{{asset('/files/app-assets/images/ico/favicon.ico')}}">
        <link
            rel="shortcut icon"
            type="image/png"
            href="{{asset('/files/app-assets/images/ico/favicon-32.png')}}">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
    

        <!-- DataTables CSS -->
<!-- DataTables JS -->

<link
rel="stylesheet"  type="text/css" href="files/media/css/dataTables.bootstrap4.css" >
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/bootstrap.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/fonts/icomoon.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/vendors/css/extensions/pace.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/bootstrap-extended.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/app.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/custom-rtl.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/core/menu/menu-types/vertical-overlay-menu.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/app-assets/css-rtl/core/colors/palette-tooltip.css')}}">
        <link
            rel="stylesheet"
            type="text/css"
            href="{{asset('/files/assets/css/style-rtl.css')}}">
            <style>
                *{
                    
                        font-family: 'DroidArabicKufiRegular'; 
                        font-weight: normal; 
                        font-style: normal; 
                     
                }
            </style>
    </head>
    <body
        data-open="click"
        data-menu="vertical-menu"
        data-col="2-columns"
        class="vertical-layout vertical-menu 2-columns  fixed-navbar">

        <!-- navbar-fixed-top-->
        <nav
            class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu hidden-md-up float-xs-left">
                            <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                                <i class="icon-menu5 font-large-1"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.html" class="navbar-brand nav-link">
                                <img
                                    alt="branding logo"
                                    src="./files/app-assets/images/logo/robust-logo-light.png"
                                    data-expand="./files/app-assets/images/logo/robust-logo-light.png"
                                    data-collapse="./files/app-assets/images/logo/robust-logo-small.png"
                                    class="brand-logo">
                            </a>
                        </li>
                        <li class="nav-item hidden-md-up float-xs-right">
                            <a
                                data-toggle="collapse"
                                data-target="#navbar-mobile"
                                class="nav-link open-navbar-container">
                                <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-container content container-fluid">
                    <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
                        <ul class="nav navbar-nav">
                            <li class="nav-item hidden-sm-down">
                                <a class="nav-link nav-menu-main menu-toggle hidden-xs">
                                    <i class="icon-menu5"></i>
                                </a>
                            </li>
                            <li class="nav-item hidden-sm-down">
                                <a href="#" class="nav-link nav-link-expand">
                                    <i class="ficon icon-expand2"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav float-xs-right">
                            <li class="dropdown dropdown-language nav-item">
                                <a
                                    id="dropdown-flag"
                                    href="#"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    class="dropdown-toggle nav-link">
                                    <i class="flag-icon flag-icon-gb"></i>
                                    <span class="selected-language">English</span></a>
                                <div aria-labelledby="dropdown-flag" class="dropdown-menu">
                                    <a href="#" class="dropdown-item">
                                        <i class="flag-icon flag-icon-gb"></i>
                                        English</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="flag-icon flag-icon-fr"></i>
                                        French</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="flag-icon flag-icon-cn"></i>
                                        Chinese</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="flag-icon flag-icon-de"></i>
                                        German</a>
                                </div>
                            </li>
                            <li class="dropdown dropdown-notification nav-item">
                                <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                    <i class="ficon icon-bell4"></i>
                                    <span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container">
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle">
                                                    <i class="icon-cart3 icon-bg-circle bg-cyan"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">You have new order!</h6>
                                                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle">
                                                    <i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading red darken-1">99% Server load</h6>
                                                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle">
                                                    <i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle">
                                                    <i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Complete the task</h6>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left valign-middle">
                                                    <i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Generate monthly report</h6>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer">
                                        <a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-notification nav-item">
                                <a href="#" data-toggle="dropdown" class="nav-link nav-link-label">
                                    <i class="ficon icon-mail6"></i>
                                    <span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <h6 class="dropdown-header m-0">
                                            <span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
                                    </li>
                                    <li class="list-group scrollable-container">
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle"><img src="./files/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
                                                        <i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Margaret Govan</h6>
                                                    <p class="notification-text font-small-3 text-muted">I like your portfolio, lets start the project.</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-busy rounded-circle"><img src="./files/app-assets/images/portrait/small/avatar-s-2.png" alt="avatar">
                                                        <i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Bret Lezama</h6>
                                                    <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-online rounded-circle"><img src="./files/app-assets/images/portrait/small/avatar-s-3.png" alt="avatar">
                                                        <i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Carie Berra</h6>
                                                    <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)" class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <span class="avatar avatar-sm avatar-away rounded-circle"><img src="./files/app-assets/images/portrait/small/avatar-s-6.png" alt="avatar">
                                                        <i></i></span></div>
                                                <div class="media-body">
                                                    <h6 class="media-heading">Eric Alsobrook</h6>
                                                    <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p>
                                                    <small>
                                                        <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time>
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="dropdown-menu-footer">
                                        <a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-user nav-item">
                                <a
                                    href="#"
                                    data-toggle="dropdown"
                                    class="dropdown-toggle nav-link dropdown-user-link">
                                    <span class="avatar avatar-online"><img src="./files/app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
                                        <i></i>
                                    </span><span class="user-name">John Doe</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-head"></i>
                                        Edit Profile</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-mail6"></i>
                                        My Inbox</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-clipboard2"></i>
                                        Task</a>
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-calendar5"></i>
                                        Calender</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item">
                                        <i class="icon-power3"></i>
                                        Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--
        ////////////////////////////////////////////////////////////////////////////-->

        <!-- main menu-->
        <div
            data-scroll-to-active="true"
            class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
            <!-- main menu header-->
            <div class="main-menu-header">
                <input type="text" placeholder="Search" class="menu-search form-control round"/>
            </div>
            <!-- / main menu header-->
            <!-- main menu content-->
            <div class="main-menu-content">
                <ul
                    id="main-menu-navigation"
                    data-menu="menu-navigation"
                    class="navigation navigation-main">
                    <li class=" nav-item">
                        <a href="index.html">
                            <i class="icon-home3"></i>
                            <span data-i18n="nav.dash.main" class="menu-title">الاخبار
                            </span>
                        </a>
                        <ul class="menu-content">
                            <li class="active">
                                <a href="#" data-i18n="nav.dash.main" class="menu-item">
                                    <i class="icon-home3"></i>اضافة 
                                </a>
                            </li>
                          
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-stack-2"></i>
                        <span data-i18n="nav.page_layouts.main" class="menu-title">الطالب
                        </span>
                    </a>
                    <ul class="menu-content">

                        <li class=" nav-item">
                            <a href="#">
            
                                <span data-i18n="nav.menu_levels.main" class="menu-title"> <i class="icon-calendar4"></i> اضافة </span></a>
                            
                        </li>
                
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-briefcase4"></i>
                        <span data-i18n="nav.project.main" class="menu-title">الاساتذة
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a
                                href="#"
                                data-i18n="nav.invoice.invoice_template"
                                class="menu-item"> <i class="icon-newspaper-o"></i> اضافة
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-ios-albums-outline"></i>
                        <span data-i18n="nav.cards.main" class="menu-title">التبلغات 
                        </span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a
                                href="#"
                                data-i18n="nav.cards.card_bootstrap"
                                class="menu-item"> <i class="icon-book2"></i> الرسائل
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                data-i18n="nav.cards.card_actions"
                                class="menu-item"> <i class="icon-volume-up"></i>الفيديو
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-whatshot"></i>
                        <span data-i18n="nav.advance_cards.main" class="menu-title">
                           معرض الصور
                        </span>
                    </a>
                    <ul class="menu-content">
                       
                    </ul>
                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-compass3"></i>
                        <span data-i18n="nav.content.main" class="menu-title">
                            الدعم الفني
                        </span>
                    </a>

                </li>
                <li class=" nav-item">
                    <a href="#">
                        <i class="icon-grid2"></i>
                        <span data-i18n="nav.components.main" class="menu-title">التعليمات
                        </span>
                    </a>

                </li>

            </ul>
        </div>
        <!-- /main menu content-->
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
    </div>
    <!-- / main menu-->

    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <!--
    ////////////////////////////////////////////////////////////////////////////-->

    <footer class="footer footer-static footer-light navbar-border">
        <p
            class="clearfix text-muted text-sm-center mb-0 px-2"
            style="text-align:center">
            <span class="float-md-left d-xs-block d-md-inline-block">Copyright &copy; 2019
                <a
                    href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                    target="_blank"
                    class="text-bold-800 grey darken-2">Al-Sadeem CO.
                </a>, All rights reserved.
            </span>
        </p>
    </footer>

    <!-- BEGIN VENDOR JS-->
    <script
        src="{{asset('/files/app-assets/js/core/libraries/jquery.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/tether.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/js/core/libraries/bootstrap.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/unison.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/blockUI.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/jquery.matchHeight-min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/ui/screenfull.min.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('/files/app-assets/vendors/js/extensions/pace.min.js')}}"
        type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script
        src="{{asset('/files/app-assets/vendors/js/charts/chart.min.js')}}"
        type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script
        src="{{asset('/files/app-assets/js/core/app-menu.js')}}"
        type="text/javascript"></script>
    <script
        src="{{asset('files/app-assets/js/core/app.js')}}"
        type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script
        src="{{asset('files/app-assets/js/scripts/pages/dashboard-lite.js')}}"
        type="text/javascript"></script>

        <script src="files/media/js/jquery.dataTables.js">

        </script>
        <script src="files/media/js/dataTables.bootstrap4.js">

        </script>
        <script>
            $('#dataTable').DataTable();
        </script>

        <script src="{{url('js/frontend.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
</body>
</html>