<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Old-pteient entry</title>
</head>
<body class="hold-transition sidebar-mini" >
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->


        @include('Includes.Sidebar')
        <!-- Navbar section start -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->
          <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
              <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
              <form class="form-inline">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </li>

          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                  <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
                <!-- Message End -->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-item dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
              <i class="fas fa-th-large"></i>
            </a>
          </li>
        </ul>
      </nav>
        <!-- Navbar end -->
         <!-- sidebar section start -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                               Reception & Billings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="newpatiententry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New patient Entry/Bill</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/old-patient-entry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Old patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Payment.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payments</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Collection history.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collection history</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="search patient.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="doctornameentry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Doctorwisetestcategoryincome.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Wise Test Income</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="VIEWMYTRANSACTIONS.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View my trnsactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="viewalltransactions.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All trnsactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="CashBook2.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Cash book</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Accounts Section
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Viewtransactions.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View  Transactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Paymentreceivelist.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment Recieve List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Discount Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Discount Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Doctorwisetestcategoryincome.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Wise Test Income</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Test Report(Doctor wise)</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="search patient.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Patient Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="search patient.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Search Patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="doctornameentry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Add IncomeorExpenses.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Income/Expenses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="Financial Statement.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Financial Statement</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Collection history.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collection history</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Daily Referral Paid Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Referral Paid Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Daily Referral Due Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Referral Due Summary</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Lab Section/Report
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Add Test Result.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Test Result</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="search patient.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list/Search patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Add Test-Report Format.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Test-Report Format</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Test Category Entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Test Category Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> TEST category Wise Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Patient Summary.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Report Done Status.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Report Done Status</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Administration
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Add User Group.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User Group</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Add User.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Database Repair.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Database Repair</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="View User.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Add Referral Doctor.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Referral Doctor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="doctornameentry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Purpose Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Expense entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Administration\Test Category Entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Test Category Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Administration\Test Entry.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Test Entry</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Collection history.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Income Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="search patient.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list/Search patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="dailytestcategorywisereport.html" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Test Report(Doctor wise)</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- sidebar section end -->
        <!-- Content Wrapper. Contains page content -->
    </div>
    <div class="wrapper">
    <section class="content-wrapper">
        <div class="container ">

            <form>
              <table class="table table-bordered bg-gradient-success">
                  <td colspan="2">
              <label for="Patient-ID">Patient ID :   </label>
          </td>


          <td colspan="4">
              <input  type="number" id="Patient-ID" class="form-control-md w-50" placeholder="enter......">
          </td>
          </table>
            </form>

          </div>
          <div class="container mt-1">
           <table class="table table-bordered  align-vertical">
                <thead></thead>
                <tbody>
                   <tr>
                    <td>Patient-ID</td>
                    <td>1</td>
                    <td>Entry Date</td>
                    <td>15/06/2021 05:33</td>
                   </tr>
                   <tr>
                    <td>Reg.No</td>
                    <td>01/06-2021</td>
                    <td>Operator</td>
                    <td>Waji</td>
                   </tr>
                   <tr>
                    <td>Name</td>
                    <td>abdul rauf</td>
                    <td>Phone</td>
                    <td>03099814608</td>
                   </tr>
                   <tr>
                    <td>Age</td>
                    <td>25 years</td>
                    <td>Gender</td>
                    <td>Male</td>
                   </tr>
                   <tr>
                    <td>Address</td>
                    <td colspan="3">Rawalpinid shamsabad</td>

                   </tr>
                   <tr>
                    <td>Doctor Name</td>
                    <td colspan="3">DR.SHUVU MBBS ,FCCPS</td>

                   </tr>

                </tbody>

            </table>
       </div>
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
                    <h3 class="card-title">Old Patient details</h3>
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
                            <div class="col-6 mt-2">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" placeholder="">
                            </div>
                            <div class="col-6 mt-2">
                                <label for="Entry-Date">Entry-Date</label>
                                <input type="datetime" id="Entry-Date" class="form-control" placeholder="">
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
                                <label for="exampleInputEmail1"> Checked BY Doctor Name</label>
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
            </div>

        </div>
        <div class="container mt-3">
            <div class="wrapper">


              <table class="table table-bordered">
                <thead  class="bg-gradient-success">


                    <tr>
                      <th scope="col">SI</th>
                      <th scope="col" class="w-50">TEST Name</th>
                      <th scope="col" >Referrer Fee</th>
                      <th scope="col"  >Amount</th>


                    </tr>


                </thead>

                    <tbody>
                      <tr >

                        <!-- <th scope="row">1</th> -->
                        <td>1</td>
                        <td>Total</td>
                        <td>0</td>
                        <td colspan="3">0</td>






                      </tr>
                      <tr  class="bg-gradient-success h-50">
                        <!-- <th scope="row" colspan="3">2</th> -->
                        <td colspan="3">
                          <form action="/action_page.php">
                            <label for="reportdelievery" class="form-label">
                              Report  Delivery Date & Time:

                            </label>
                            <input id="reportdelievery" type="datetime-local" />
                          </form>
                        </td>
                        <td >0</td>
                        <!-- <td></td>
                        <td ></td>  -->
                        <!-- <td></td>
                        <td></td> -->
                        <!-- <td colspan="2">2100</td> -->
                        <!-- <td ></td> -->


                      </tr>
                      <tr>
                        <td  colspan="3">Sub Total:</td>
                        <td >0</td>
                        <!-- <td></td>
                        <td ></td> -->

                      </tr>
                      <tr>
                        <td colspan="3" class="align-items-end">Discount ? :</td>
                         <td>
                          <form class="form-check">
                           <input type="checkbox" id="discountcheck" class="form-control-sm justify-content:start; align-items:start;" >
                          </form>
                         </td>
                        <!-- <td></td>
                        <td>0</td> -->
                      </tr>
                      <tr>
                        <td colspan="3"class="align-items-end">Payment :</td>
                        <td>3000</td>
                        <!-- <td></td>
                        <td></td> -->
                      </tr>
                      <tr>
                        <td colspan="3" class="align-items-end">Due Amount: </td>
                        <td>0</td>
                        <!-- <td></td>
                        <td></td> -->
                      </tr>
            </table>

       <div class="col-5 m-auto mt-2"  style="display: flex;justify-content:center left;align-items:center;">
         <a class="nav-link" href="#"><button type="submit" id="table-submission" class="btn btn-primary">submit</button></a>
      </div>
      </div>

          </div>


    </section>
    </div>
     <!-- footer section start -->

     <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>

            <!-- footer section end -->
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
    <script> src="{{ asset('js/sidebar-script.js') }}"></script>
</body>
</html>
