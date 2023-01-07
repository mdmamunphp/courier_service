<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Roll Express</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/asset/images/favicon.png')}}">
        <!-- Pignose Calender -->
        <link href="{{ asset('public/asset/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="{{ asset('public/asset/plugins/chartist/css/chartist.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/asset/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
        <!-- Custom Stylesheet -->
        <link href="{{ asset('public/asset/css/style.css')}}" rel="stylesheet">
        <link href="{{ asset('public/asset/css/custom_table.css')}}" rel="stylesheet">

    </head>

<body>

    <!--******************* Preloader start  ********************-->

    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************     Preloader end     ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="{{ asset('public/asset/images/logo.png')}}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('public/asset/images/logo-compact.png')}}" alt=""></span>
                    <span class="brand-title">
                        <!-- <img src="{{ asset('public/asset/images/logo-text.png')}}" alt=""> -->
                        <!-- <img src="{{ asset('public/roll.jpg')}}" height="50" width="100" alt=""> -->
                        <h2 style="color:white">Roll Express</h2>
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
        @include('admin.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
   
         @include('admin.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
             @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Reserved by <a href="https://themeforest.net/user/quixlab">Roll Star</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************    Main wrapper end    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('public/asset/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('public/asset/js/custom.min.js')}}"></script>
    <script src="{{ asset('public/asset/js/settings.js')}}"></script>
    <script src="{{ asset('public/asset/js/gleek.js')}}"></script>
    <script src="{{ asset('public/asset/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('public/asset/plugins/chart.public/asset/js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('public/asset/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{ asset('public/asset/plugins/d3v3/index.js')}}"></script>
    <script src="{{ asset('public/asset/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{ asset('public/asset/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('public/asset/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('public/asset/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('public/asset/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('public/asset/plugins/pg-calendar/public/asset/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('public/asset/plugins/chartist/public/asset/js/chartist.min.js')}}"></script>
    <script src="{{ asset('public/asset/plugins/chartist-plugin-tooltips/public/asset/js/chartist-plugin-tooltip.min.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script src="{{ asset('public/asset/js/dashboard/dashboard-1.js')}}"></script>






    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

</body>

</html>