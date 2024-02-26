<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Elektron Jurnallar tizimi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('/img/favicon.png') }}" >
  <link rel="apple-touch-icon" href="{{ asset('/img/apple-touch-icon.png') }}" >

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" >

  <link rel="stylesheet"  href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" >
  <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" >
  <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('/vendor/quill/quill.bubble.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}" >
  <link rel="stylesheet" href="{{ asset('vendor/simple-datatables/style.css') }}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  
</head>

<body>
    @include('dashboard.layout.header')
    @include('dashboard.layout.aside')


  <main id="main" class="main">
      @yield('content')
      

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; 2024 <strong><span> MAAXM</span></strong> Barchasi himoyalangan!
      
    </div>
  
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('vendor/quill/quill.min.js') }} assets"></script>
  <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
  
  <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }} "></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>