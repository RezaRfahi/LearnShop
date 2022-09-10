<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل مدیریت</title>

    @livewireStyles

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    @vite([
    'resources/css/app.css',
    'resources/css/adminlte.css',
    'resources/css/adminlte.min.css',
    'resources/css/bootstrap-rtl.min.css',
    'resources/css/custom-style.css',
    'resources/css/persian-datepicker.min.css',
    'resources/js/app.js',
    'resources/js/adminlte.min.js.map',
    'resources/js/demo.js',
    'resources/js/persian-date.min.js',
    'resources/js/persian-datepicker.min.js',
    'resources/js/adminlte.js',
    'resources/js/adminlte.js.map',            
    'resources/js/adminlte.min.js'
]);

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    @livewire('admin.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @livewire('admin.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        {{-- {{$slot}} --}}
    </div>
    
    <!-- /.content-wrapper -->
    

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

@livewireScripts

</body>
</html>
