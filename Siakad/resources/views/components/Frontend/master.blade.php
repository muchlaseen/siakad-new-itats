<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 4 admin, bootstrap 4, css3 dashboard, bootstrap 4 dashboard, AdminWrap lite admin bootstrap 4 dashboard, frontend, responsive bootstrap 4 admin template, Xtreme admin lite design, Xtreme admin lite dashboard bootstrap 4 dashboard template">
    <meta name="description"
        content="Xtreme Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    {{-- <title>Xtreme Admin Lite Template by WrapPixel</title> --}}
    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />

    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png"> --}}

    <!-- Custom CSS -->
    {{-- <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet"> --}}
    <link href="{{asset('css/xtreme/chartist.min.css')}} " rel="stylesheet" type="text/css" >

    <!-- Custom CSS -->
    {{-- <link href="../../dist/css/style.min.css" rel="stylesheet"> --}}
    <link href="{{asset('css/xtreme/style.min.css')}} " rel="stylesheet" type="text/css" >

    {{-- <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css"> --}}
</head>

<body>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> --}}

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        
        
        {{-- @include('components.Frontend.header') --}}
        <x-Frontend.header></x-Frontend.header>

        

        {{-- @include('components.Frontend.sidebar') --}}
        <x-Frontend.sidebar></x-Frontend.sidebar>

        @yield('content')
    </div>
    <script src="{{asset('js/xtreme/jquery.min.js')}}"></script>
    <script src="{{asset('js/xtreme/popper.min.js')}}"></script>
    <script src="{{asset('js/xtreme/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/xtreme/app-style-switcher.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('js/xtreme/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('js/xtreme/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('js/xtreme/custom.js')}}"></script>

</body>

</html>