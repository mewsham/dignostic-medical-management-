<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 " >
    <!-- Sidebar Menu -->
    <nav class="mt-2 "  >
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                    <li class="nav-item">
                        <a href="" class="nav-link" style="background-color: green;
        color: white;">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('index')}}" class="nav-link">
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
                                <a href="{{url('/newpatiententry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New patient Entry/Bill</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('oldpatiententry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Old patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/payment')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payments</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/collectionhistory')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collection history</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/searchpatient')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/doctornameentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Doctorwisetestcategoryincome')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Wise Test Income</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{url('/VIEWMYTRANSACTIONS')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View my trnsactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/viewalltransactions')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View All trnsactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Expenseentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Expensesummary')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/CashBook2')}}" class="nav-link">
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
                                <a href="{{url('/Viewtransactions')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View  Transactions</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Paymentreceivelist')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Payment Recieve List</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Expensesummary')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/DiscountSummary')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Discount Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Doctorwisetestcategoryincome')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Wise Test Income</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Test Report(Doctor wise)</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/searchpatient')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/PatientSummary')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/searchpatient')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Search Patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/doctornameentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/AddIncomeorExpenses')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Income/Expenses</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/expenseentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                {{-- <a href="{{route('Financial Statement')}}" class="nav-link"> --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Financial Statement</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="{{route('Collection history')}}" class="nav-link"> --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Collection history</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="{{route('Daily Referral Paid Summary')}}" class="nav-link"> --}}
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Daily Referral Paid Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                {{-- <a href="'{{route('Daily Referral Due Summary')}}" class="nav-link"> --}}
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
                                <a href="{{url('/php')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Test Result</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/searchpatient')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list/Search patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/AddTestReportFormat')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Test-Report Format</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/TestCategoryEntry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Test Category Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p> TEST category Wise Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/PatientSummary')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/ReportDoneStatus')}}" class="nav-link">
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
                                <a href="{{url('/addUserGroup')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User Group</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/AddUser')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/DatabaseRepair')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Database Repair</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/UserRecords')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>View User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/AddReferralDoctor')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Referral Doctor</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/doctorreferralpayment')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Doctor Referral payment</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/purposeentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Purpose Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Expenseentry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Expense Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/TestCategoryEntry')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Test Category Entry</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/testentry')}}" class="nav-link">
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
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>DAily TEST category Wise Report</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/Collectionhistory')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Income Summary</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/searchpatient')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Patient list/Search patient</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{url('/dailytestcategorywisereport')}}" class="nav-link">
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
