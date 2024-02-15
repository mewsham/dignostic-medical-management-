<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        @include('Includes.Navbar')

        @include('Includes.Sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            {{--<div class="content-header" style="background-color: gainsboro;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
                <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container mt-3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Tests</h3>
                        </div>
                        <div class="form-group card-body">
                            <label for="exampleInputEmail1">Add Test</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                            <div class="row mt-4">
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" class="form-control" placeholder=".col-3">
                                </div>
                                <div class="col-6">
                                    <label for="exampleInputEmail1">Referrer fee</label>
                                    <input type="text" class="form-control" placeholder=".col-4">
                                </div>
                                <div class="col-5 mt-3" style="display: flex;justify-content: left;align-items: end;">
                                    <button class="btn btn-primary">Add test</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Patient Details</h3>
                        </div>
                        <div class="form-group card-body">
                            <label for="exampleInputEmail1">Add Test</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter...">
                            <div class="row mt-4">
                                <div class="col-6">
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Patient Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Phone/Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Gender</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Patient Age</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Patient Id/Reg</label>
                                        <input type="text" class="form-control" disabled placeholder="" value="ne8efds32">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Patient Blood Group</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Doctor Name</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="exampleInputEmail1">Referred By</label>
                                        <input type="text" class="form-control" placeholder="" value="">
                                    </div>
                                </div>
                                <div class="col-12 mt-3" style="display: flex;justify-content: left;align-items: end;">
                                    <button class="btn btn-primary">Add test</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
            </div>--}}
            <!-- /.content-header -->

            <!-- Main content -->

            <!-- /.content -->
        </div>
        @include('Includes.Footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
