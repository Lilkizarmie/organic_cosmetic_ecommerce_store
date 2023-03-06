<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="CasieMata" content="Organic cosmetic brand">
    <meta name="generator" content="Jekyll">
    <title>CasieMata Skincare - Organic products</title>

    <script src="js/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script>
    <link
        href="s/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="vendors/fontawesome-pro-5/css/all.css">
    <link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="vendors/slick/slick.min.css">
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="vendors/animate.css">
    <link rel="stylesheet" href="vendors/mapbox-gl/mapbox-gl.min.css">
    <link rel="stylesheet" href="vendors/fonts/font-phosphor/css/phosphor.min.css">
    <link rel="stylesheet" href="vendors/fonts/tuesday-night/stylesheet.min.css">
    <link rel="stylesheet" href="vendors/fonts/butler/stylesheet.min.css">
    <link rel="stylesheet" href="vendors/fonts/a-antara-distance/stylesheet.min.css">

    <link rel="stylesheet" href="css/themes.css">

    <link rel="icon" href="images/favicon.jpg">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@">
    <meta name="twitter:creator" content="@">
    <meta name="twitter:title" content="CasieMata">
    <meta name="twitter:description" content="Organic skincare product">
    <meta name="twitter:image" content="images/logo_01.png">

    <meta property="og:url" content="">
    <meta property="og:title" content="CasieMata">
    <meta property="og:description" content="organic skincare product">
    <meta property="og:type" content="website">
    <meta property="og:image" content="images/logo_01.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    @livewireStyles
</head>

<body>
    @include('layouts.header')


    <!----------------------Search popup start-------------------->
    @include('layouts.search')

    <!----------------------Search popup finished-------------------->

    <!----------------------custom icon start-------------------->

    @include('layouts.custom-icon-start')
    <!----------------------custom icon finish-------------------->


    <!----------------------sidebar cart start-------------------->

    @include('layouts.sidebarcart')
    <!----------------------sidebar cart start-------------------->

    <!----------------------mobile menu start-------------------->

    @include('layouts.mobile-menu')

    <!---------------------Mobile Menu End----------------------->

    @yield('main-container')
    @include('layouts.footer')

    <script src="vendors/jquery.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendors/slick/slick.min.js"></script>
    <script src="vendors/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendors/counter/countUp.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/hc-sticky/hc-sticky.min.js"></script>
    <script src="vendors/jparallax/TweenMax.min.js"></script>
    <script src="vendors/mapbox-gl/mapbox-gl.js"></script>
    <script src="vendors/isotope/isotope.js"></script>

    <script src="js/theme.js"></script>
    @livewireScripts
</body>

</html>
