<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Reminder Vault</title>
   
    <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet">

    <link href="{{ asset('dist/css/style.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}" ></script>
    
</head>
<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
   
    <div id="main-wrapper">
        @include('layout.header')
        @include('layout.sidebar')

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
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>

<script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/libs/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>

<script src="{{asset('dist/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('dist/js/jquery.ui.touch-punch-improved.js')}}"></script>

<script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>

<script src="{{asset('dist/js/waves.js')}}"></script>
<script src="{{asset('dist/js/sidebarmenu.js')}}"></script>
<script src="{{asset('dist/js/custom.min.js')}}"></script>
<script src="{{ asset('dist/js/pages/calendar/cal-init.js')}}"></script>

</body>
</html>