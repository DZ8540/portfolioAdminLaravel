<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>DZ Admin | @yield('title')</title>
  <link rel="apple-touch-icon" href="{{ asset('/app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/app-assets/images/ico/favicon.ico') }}">
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
    rel="stylesheet">

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/vendors.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/charts/apexcharts.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/vendors/css/extensions/dragula.min.css') }}">
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/bootstrap-extended.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/colors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/components.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/themes/dark-layout.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/themes/semi-dark-layout.css') }}">
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/app-assets/css/pages/dashboard-analytics.css') }}">
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css') }}">
  <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
  class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  "
  data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  @include('admin.components.header')

  @yield('content')

  <!-- BEGIN: Vendor JS-->
  <script src="{{ asset('/app-assets/vendors/js/vendors.min.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.js') }}"></script>
  <script src="{{ asset('/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js') }}"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="{{ asset('/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('/app-assets/vendors/js/extensions/dragula.min.js') }}"></script>
  <!-- END: Page Vendor JS-->

  <!-- BEGIN: Theme JS-->
  <script src="{{ asset('/app-assets/js/core/app-menu.js') }}"></script>
  <script src="{{ asset('/app-assets/js/core/app.js') }}"></script>
  <script src="{{ asset('/app-assets/js/scripts/components.js') }}"></script>
  <script src="{{ asset('/app-assets/js/scripts/footer.js') }}"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  <script src="{{ asset('/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
  <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
