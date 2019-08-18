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
            content="اكاديمية المحاربيين">
        <meta
            name="keywords"
            content="اكاديمية المحاربيين">
        <meta name="author" content="PIXINVENT">
        <title>اكاديمية المحاربيين</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}" type="text/css"/>

        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{url('css/students.css')}}" type="text/css"/>
        <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css')}}">
        <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js')}}"></script>
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
                .table thead th {
                                    vertical-align: bottom;
                                    border-bottom: 2px solid #299e81;
                                    border-top: 1px solid #E3EBF3;
                                    background-color: #37bc9b;
                                    color:#fff
                                }
                                .act-btn{     font-size: 0.8rem;   padding: 3px;}
                                .table th, .table td {
    padding: 0.75rem 1.93rem;
}
            </style>
    </head>
    <body
        data-open="click"
        data-menu="vertical-menu"
        data-col="2-columns"
        class="vertical-layout vertical-menu 2-columns  fixed-navbar">

        <!-- navbar-fixed-top-->
        @include('layouts.navbar')
      <!-- /  navbar-fixed-top-->

        <!-- main menu-->
        @include('layouts.sidebar')
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
                        href="https://www.codeforiraq.org"
                        target="_blank"
                        class="text-bold-800 grey darken-2">Code For Iraq
                    </a>, All rights reserved.
                </span>
            </p>
        </footer>
        <script src="{{asset('js\jquery.min.js')}}"></script>
        <script src="{{asset('js\type.js')}}"></script>
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
