<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{asset('AdminAssets/assets/img/favicon.ico')}}"/>
    <link href="{{asset('AdminAssets/css/loader.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{asset('AdminAssets/JS/loader.js')}}"></script>
    @include('sweetalert::alert')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.12/sweetalert2.min.css" integrity="sha512-yX1R8uWi11xPfY7HDg7rkLL/9F1jq8Hyiz8qF4DV2nedX4IVl7ruR2+h3TFceHIcT5Oq7ooKi09UZbI39B7ylw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="{{ asset('AdminAssets/plugins/src/sweetalerts2/sweetalerts2.css') }}" rel="stylesheet" type="text/css" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
     @if(LaravelLocalization::getCurrentLocale()=='en')

     <!--  Begin LTR EN  -->
    <link href="{{ asset('AdminAssets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/assets/css/light/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!--  END LTR EN -->
@else
    <!--  Begin RTL AR  -->
    <link href="{{ asset('AdminAssets/RTL/css/bootstrap.rtl.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/RTL/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('AdminAssets/RTL/css/dash_1.css')}}" rel="stylesheet" type="text/css" />
    <!--  END LTR AR -->
@endif
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('AdminAssets/plugins/src/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    @yield('css')

</head>
<body class="layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div>