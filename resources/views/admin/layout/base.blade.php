<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Connect Plus</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">

        <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/font-awesome.min.css')}}" />
        <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
        @stack('internal-css')
      </head>
</head>
<body>
    @yield('master')

    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/js/circle-progress.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>


    @stack('internal-js')
</body>
</html>
