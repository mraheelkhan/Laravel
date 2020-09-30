<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NZMISCore</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="user-id" content="{{ Auth::check() ? Auth::user()->id : ''}}">

    <link rel="icon" href="{{ asset('img/favicon.png')}}" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="{{asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/fontawesome-free/css/all.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/dist/css/adminlte.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/select2/css/select2.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/sweetalert2/sweetalert2.min.css')}}"/>
    <link rel="stylesheet"  href="{{asset('public/plugins/toastr/toastr.min.css')}}"/>
    
    <script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.min.js"></script>
    
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="vueApp">
    @include('layouts.partials.leftnav')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{ $controllerName }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">{{ $controllerName }}</a></li>
                            <li class="breadcrumb-item active">{{ $actionName }}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @yield('content')
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
        
     

        <footer class="main-footer">
            <strong>Copyright &copy; 1989-2020 <a href="#">Nai Zindagi Trust</a>.</strong>
            All rights reserved. <a asp-area="" asp-controller="Home" asp-action="Privacy">Privacy</a>
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 4.0
            </div>
        </footer>
        <script src="{{asset('public/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/plugins/inputmask/jquery.inputmask.bundle.js')}}"></script>
        <script src="{{asset('public/plugins/moment/moment.min.js')}}"></script>
        <script src="{{asset('public/plugins/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('public/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="{{asset('public/plugins/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>
        <script src="{{asset('public/dist/js/custom.js')}}"></script>
        @stack('scripts')

</body>
</html>
