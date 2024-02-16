<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
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

<body class="hold-transition sidebar-mini ">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>


        @include('Includes.Sidebar')



        <!-- sidebar section end -->

        <div class="content-wrapper">

            <!-- Main content -->
            <section class="content">
                <div class="container mt-3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Tests</h3>
                        </div>
                        <form action="{{ route('Newpatiententry') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group card-body">
                                <label for="exampleInputEmail1">Add Test</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Enter..." name="addtest">
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Price</label>
                                        <input type="text" class="form-control" placeholder=".col-3" name="price">
                                    </div>
                                    <div class="col-6">
                                        <label for="exampleInputEmail1">Referrer fee</label>
                                        <input type="text" class="form-control" placeholder=".col-4"
                                            name="referrerfee">
                                    </div>
                                    <div class="col-5 mt-3"
                                        style="display: flex;justify-content: left;align-items: end;">
                                        <button class="btn btn-primary">Add test</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                </div>

                <div class="container mt-3">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Patient Details</h3>
                        </div>
                        <form action="{{route('Newpatiententry2')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group card-body">
                                <label for="exampleInputEmail1">Add Test</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="addtest"
                                    placeholder="Enter...">
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Patient Name</label>
                                            <input type="text" class="form-control" placeholder="" name="patientname">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Phone/Mobile Number</label>
                                            <input type="text" class="form-control" placeholder="" name="phonenumber">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Gender</label>
                                            <input type="text" class="form-control" placeholder="" name="gender">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control" placeholder="" name="address">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Patient Age</label>
                                            <input type="text" class="form-control" placeholder="" name="patientage">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Patient Id/Reg</label>
                                            <input type="text" class="form-control"  placeholder=""
                                               name="patientid">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Patient Blood Group</label>
                                            <input type="text" class="form-control" placeholder="" name="bloodgroup">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Doctor Name</label>
                                            <select name="doctorname" id="doctor">
                                                <option value="0">---select doctor---</option>
                                                @foreach ($doctor['data'] as $doctorname )


                                                <option value="{{$doctorname->name}}">{{$doctorname->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <label for="exampleInputEmail1">Referred By</label>
                                            <input type="text" class="form-control" placeholder="" name="referredby"
                                                value="">
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3"
                                        style="display: flex;justify-content: left;align-items: end;">
                                        <button class="btn btn-primary">Add test</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>

                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>

        <!-- footer section start -->

        <footer class="main-footer fixed-bottom">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- footer section end -->
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>
