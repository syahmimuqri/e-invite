<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Small Apps | Bootstrap App Landing Template</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="small-apps" />

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('main/images/favicon.png') }}" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ asset('main/plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('main/plugins/themify-icons/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('main/plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('main/plugins/slick/slick-theme.css') }}">
  <link rel="stylesheet" href="{{ asset('main/plugins/fancybox/jquery.fancybox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('main/plugins/aos/aos.css') }}">

  <!-- CUSTOM CSS -->
  <link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<x-main.header />

{{ $slot }}

<!--============================
=            Footer            =
=============================-->
<x-main.footer />

  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{ asset('main/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('main/plugins/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('main/plugins/slick/slick.min.js') }}"></script>
  <script src="{{ asset('main/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('main/plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <script src="{{ asset('main/plugins/aos/aos.js') }}"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{ asset('main/plugins/google-map/gmap.js') }}"></script>
  
  <script src="{{ asset('main/js/script.js') }}"></script>
</body>

</html>