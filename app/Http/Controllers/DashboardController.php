<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\AddPatient;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }
    // public function newPatientEntry()
    // {
    //     return view('New_Patient_Entry');
    // }

    // public function oldPatientEntry()
    // {
    //     return view('Old_Patient_Entry');
    // }

    // public function payments()
    // {
    //     return view('Payment');
    // }

    // public function collectionHistory()
    // {
    //     return view('Collection_History');
    // }

    // public function patientList()
    // {
    //     return view('Patient_List');
    // }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data['newpatient']= AddPatient::all();
        return view('dataforms.New_patient_entry2',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
