<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('Auth.register');
})->name('register');

Route::get('/login', function () {
    return view('Auth.login');
})->name('login');

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::post('/Newpatiententry',[PageController::class, 'newPatientEntry'])->name('Newpatiententry');
Route::post('/Newpatiententry2',[PageController::class, 'New_PatientEntry2'])->name('Newpatiententry2');
Route::get('/newpatiententry',[PageController::class, 'New_PatientEntry'])->name('newpatiententry');
Route::get('/oldpatiententry',[PageController::class, 'oldPatientEntry'])->name('oldpatiententry');
Route::get('/payment',[PageController::class,'payment'])->name('payment');
Route::get('/collectionhistory',[PageController::class,'collectionHistory'])->name('collectionhistory');
route::get('/searchpatient',[PageController::class,'patientList']);
Route::get('/doctornameentry',[PageController::class,'doctorNameEntry']);
Route::get('/dailytestcategorywisereport',[PageController::class,'dailyTestCategoryWiseReport']);
Route::get('/VIEWMYTRANSACTIONS',[PageController::class,'viewMyTransactions']);
Route::get('/viewalltransactions',[PageController::class,'viewAllTransactions']);
Route::get('/Expenseentry',[PageController::class,'expenseEntry'])->name('Expenseentry');
Route::get('/Expensesummary',[PageController::class,'expenseSummary']);
Route::get('/CashBook2',[PageController::class,'cashBook']);
Route::get('/Viewtransactions',[PageController::class,'viewTransactions']);
Route::get('/Paymentreceivelist',[PageController::class,'paymentReceiveList']);
Route::get('/DiscountSummary',[PageController::class,'discountSummary']);
Route::get('/Doctorwisetestcategoryincome',[PageController::class,'doctorWiseTestCategoryIncome']);
Route::get('/testentry',[PageController::class,'Testentry'])->name('testentry');
Route::get('/AddTestReportFormat',[PageController::class,'addTestReportFormat'])->name('AddTestReportFormat');
Route::get('/doctorreferralpayment',[PageController::class,'doctorrefferal_payment'])->name('doctorreferralpayment');


Route::get('/PatientSummary',[PageController::class,'patientSummary']);
Route::get('/AddTestResult',[PageController::class,'addTestResult']);
Route::get('/TestCategoryEntry',[PageController::class,'testCategoryEntry']);
Route::get('/ReportDoneStatus',[PageController::class,'reportDoneStatus']);
Route::get('/addUserGroup',[PageController::class,'addUserGroup'])->name('addUserGroup');

Route::get('/AddUser',[PageController::class,'addUser']);
Route::get('/DatabaseRepair',[PageController::class,'databaseRepair']);
Route::get('/UserRecords',[PageController::class,'viewUser']);
Route::get('/AddReferralDoctor',[PageController::class,'addReferralDoctor']);
Route::get('/purposeentry',[PageController::class,'Purposeentry'])->name('purposeentry');

//post route
Route::post('/TestEntry',[PageController::class,'Test_Entry'])->name('TestEntry');
Route::post('/usergroup',[PageController::class,'usergroup'])->name('usergroup');
Route::post('/adduser',[PageController::class,'Add_user'])->name('adduser');
Route::post('/addreferraldoctor',[PageController::class,'addreferral_doctor'])->name('addreferraldoctor');
Route::post('/PurposeEntry',[PageController::class,'Purpose_entry'])->name('PurposeEntry');





