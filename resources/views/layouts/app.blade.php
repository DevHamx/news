<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{mix('/app-assets/css/app.css')}}" rel="stylesheet">   
    <link href="{{asset('/app-assets/css/pages/user-feed.css')}}" rel="stylesheet">   
</head>
<body class="horizontal-layout horizontal-menu 2-columns pace-done menu-collapsed" data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <div id="app">
       <!-- BEGIN: Header-->
    @include('partials.header')
    <!-- END: Header-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                @yield('content')
               
        </div>
    </div>
        
    </div>
    <script src="{{mix('/app-assets/js/all.min.js')}}"></script>
    @stack('scripts')
    <script>
        //const tableFr = "{{ URL::asset('app-assets/languages/datatable-fr.json') }}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
    </script>
</body>
</html>
