<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Samcom') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>

           @toastr_css
</head>
<body class="bg-white-light">
    <div class="wraper">
        <header class="inner-header">
            @include('Admin.layouts.header')  
        </header>
            @include('Admin.layouts.sidebar')  
        <div class="dashboard-content">
            @yield('content')
        </div>
    </div>
    <script src="{{asset('frontend/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @toastr_js
    @toastr_render
</body>

</html>
