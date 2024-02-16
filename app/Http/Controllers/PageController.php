<?php

namespace App\Http\Controllers;

use App\Models\AddPatient;
use App\Models\addreferraldoctor;
use App\Models\AddTest;
use App\Models\adduser;
use App\Models\addusergroup;
use App\Models\ExpenseEntry;
use App\Models\testentry;
use Illuminate\Http\Request;

use App\Models\Patients;
use App\Models\purposeentry;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }


    // Reception & Billings Section
    public function newPatientEntry(Request $request)
    {
       $data= new AddTest;
       $data->addtest=$request->addtest;
       $data->price=$request->price;
    //    $data->PatientAge=$request->PatientAge;
       $data->referrerfee=$request->referrerfee;
    //    $data->Patientid=$request->Patientid;
    //    $data->Gender=$request->Gender;
    //    $data->Address=$request->Address;
    //    $data->Bloodgroup=$request->Bloodgroup;
    //    $data->Doctorname=$request->Doctorname;
    //    $data->RefferedBy=$request->RefferedBy;

       $data->save();
       return redirect()->back();






        // return view('New_Patient_Entry');
    }
    public function New_PatientEntry(){
        $doctor['data']=addreferraldoctor::orderby("name","asc")
        ->select('name')->get();
        return view('New_Patient_Entry')->with("doctor",$doctor);
    }
    public function New_PatientEntry2(Request $request){
        $data= new AddPatient;
        $data->addtest=$request->addtest;
        $data->patientname=$request->patientname;
        $data->patientage=$request->patientage;
        $data->phonenumber=$request->phonenumber;
        $data->patientid=$request->patientid;
        $data->gender=$request->gender;
        $data->bloodgroup=$request->bloodgroup;
        $data->address=$request->address;
        $data->doctorname=$request->doctorname;
        $data->referredby=$request->referredby;
        $data->save();
        return redirect('/AddPatient');








    }



    public function oldPatientEntry()
    {
        return view('Old_Patient_Entry');
    }

    public function payment()
    {
        return view('Payment');
    }

    public function collectionHistory()
    {
        return view('Collection_History');
    }

    public function patientList()
    {
        return view('Patient_List');
    }

    public function doctorNameEntry()
    {
        return view('Doctor_Name_Entry');
    }

    public function doctorWiseTestCategoryIncome()
    {
        return view('Doctorwisetestcategoryincome');
    }

    public function dailyTestCategoryWiseReport()
    {
        return view('Daily_Test_Cat_Wise_Report');
    }

    public function viewMyTransactions()
    {
        return view('View_My_Transactions');
    }
    public function Purposeentry(){
        return view('Purpose_entry');
    }
    public function Purpose_entry(Request $request){
        $data=new purposeentry;
        $data->purposename=$request->purposename;
        $data->purposetype=$request->purposetype;
        $data->save();
        return redirect()->back();
    }

    public function viewAllTransactions()
    {
        return view('View_All_Transactions');
    }
    public function doctorrefferal_payment(){
        return view('Doctor_Referral_payment');
    }

    public function expenseEntry()
    {
        return view('Expense_Entry');
    }
    public function Expense_entry(Request $request){
        $data= new ExpenseEntry;
        $data->amount=$request->amount;
        $data->purpose=$request->purpose;
        $data->remarks=$request->remarks;
        $data->save();
        return redirect()->back();
    }

    public function expenseSummary()
    {
        return view('Expense_Summary');
    }

    public function cashBook()
    {
        return view('CashBook2');
    }

    // Accounts Section
    public function viewTransactions()
    {
        return view('View_Transactions');
    }

    public function paymentReceiveList()
    {
        return view('Payment_Receive_List');
    }

    public function incomeSummary()
    {
        return view('Income_Summary');
    }

    public function discountSummary()
    {
        return view('Discount_Summary');
    }

    // Lab Section/Report
    public function addTestResult()
    {
        return view('Add_Test_Result');
    }

    public function searchPatient()
    {
        return view('Search_Patient');
    }

    public function addTestReportFormat()
    {
        return view('Add_Test_Report_Format');
    }

    public function testCategoryEntry()
    {
        return view('Test_Category_Entry');

    }
    public function Testentry(){
        return view('Test_Entry');
    }
    public function Test_Entry(Request $request){
        $data= new testentry;
        $data->testcategory=$request->testcategory;
        $data->name=$request->name;
        $data->price=$request->price;
        $data->referrercommission=$request->referrercommission;
        $data->save();
       return redirect()->back();


    }

    public function patientSummary()
    {
        return view('Patient_Summary');
    }

    public function reportDoneStatus()
    {
        return view('Report_Done_Status');
    }

    // Administration Section
    public function addUserGroup()
    {
        return view('Add_User_Group');
    }
    public function usergroup(Request $request)
    { $data= new addusergroup;
        $data->usergroup=$request->usergroup;
        $data->addedby=$request->addedby;
       $data->save();
       return redirect()->back();




    }


    public function addUser()
    {
        return view('Add_User');
    }

    public function Add_user(Request $request)
    {
       $data= new adduser;
       $data->username=$request->username;
       $data->userpassword=$request->userpassword;
       $data->usergroup=$request->usergroup;
       $data->save();

       return redirect()->back();




    }

    public function databaseRepair()
    {
        return view('Db_Repair');
    }

    public function viewUser()
    {
        return view('User_Records');
    }

    public function addReferralDoctor()
    {
        return view('Add_Referral Doctor');
    }
    public function addreferral_doctor(Request $request)
    {
       $data=new addreferraldoctor;
       $data->name=$request->name;
       $data->address=$request->address;
       $data->save();
       return redirect()->back();

    }


    // Management Section
    public function dailyTestReportDoctorWise()
    {
        return view('Daily_Test_Report_Doctor_Wise');
    }

    public function financialStatement()
    {
        return view('Financial_Statement');
    }

}
