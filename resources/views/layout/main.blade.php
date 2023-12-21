{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Components / Accordion - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
    
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
</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reminder Vault</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="{{asset('import/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="{{asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('import/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link href="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet">
  
  <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet"> 
</head>
<body>

    <div id="main-wrapper">
        @include('layout.header')
        @include('layout.sidebar')

          <main id="main" class="main">

    <div class="pagetitle">
      @yield('content')

    </div>

  </main>
    </div>
    
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>ReminderVault</span></strong>. All Rights Reserved
      </div>
    </footer>

    <script src="{{ asset('import/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/quill/quill.min.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('import/assets/vendor/php-email-form/validate.js')}}"></script>

    <script src="{{ asset('assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>

    <script src="{{ asset('dist/js/pages/calendar/cal-init.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}" ></script>

    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <script src="{{ asset('dist/js/sidebarmenu.js')}}"></script>
  
    <script src="{{ asset('import/assets/js/main.js')}}"></script>
  
</body>
</html>

