<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- PAGE TITLE HERE -->
        <title>@yield('title') - Pinnacle Chartered School & College</title>

        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="{{ asset($content->logo) }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('website/css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('website/css/custom.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('website/css/shortcodes.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('website/css/responsive.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('website/css/font-awesome.min.css') }}" type="text/css">
        <link rel='stylesheet' href="{{ asset('website/css/layerslider.css') }}" id='layerslider-css' type='text/css' media='all' />
        <link rel='stylesheet' href="{{ asset('website/css/prettyPhoto.css') }}" type="text/css" media="all" />

        <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" type='text/css'>
        <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" type='text/css'>
        <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" type='text/css'>

        @stack('web-css')

        <script src="{{ asset('website/js/modernizr-2.6.2.min.js') }}"></script>

    </head>

<body class="main">
    <div class="wrapper">

        {{-- Web Header --}}
        @include('layouts.partials.web_header')
        {{-- End Web Header --}}

        @yield('web-content')

        {{-- Footer --}}
        @include('layouts.partials.web_footer')
        {{-- End Footer --}}

    </div>
    <a href="#" title="Go to Top" class="back-to-top">To Top ↑</a>

    <script type="text/javascript" src="{{ asset('website/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery-migrate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.tabs.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery-easing-1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.inview.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/validation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.tipTip.minified.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.bxslider.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.prettyPhoto.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/twitter/jquery.tweet.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery.parallax-1.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/jquery-transit-modified.js') }}"></script>
    <script type="text/javascript" src="{{ asset('website/js/layerslider.kreaturamedia.jquery.js') }}"></script>
    <script type='text/javascript' src="{{ asset('website/js/greensock.js') }}"></script>
    <script type='text/javascript' src="{{ asset('website/js/layerslider.transitions.js') }}"></script>
    <script type="text/javascript">var lsjQuery = jQuery;</script>
    <script  type="text/javascript"> lsjQuery(document).ready(function() { if(typeof lsjQuery.fn.layerSlider == "undefined") { lsShowNotice('layerslider_1','jquery'); } else { lsjQuery("#layerslider_4").layerSlider({responsiveUnder: 1170, layersContainer: 1170, skinsPath: 'js/layerslider/skins/'}) } }); </script>

    @stack('web-js')
</body>
</html>
