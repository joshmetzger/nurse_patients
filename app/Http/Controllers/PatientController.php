<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Exports\PatientExport;
use Excel;

class PatientController extends Controller
{
    //
    public function index(){

        $patient = Patient::all();

        return view('patients.index');
    }

    public function exportIntoExcel(){
        return Excel::download(new PatientExport, 'patient_list.xls');
    }

    public function exportIntoCSV(){
        return Excel::download(new PatientExport, 'patient_list.csv');
    }

    public function store(Request $request){

        $inputs = request()->validate([
            'name'=>'required|min:8|max:255',
            'blood_pressure_systolic'=> 'required',
            'blood_pressure_diastolic'=> 'required',
        ]);

        // $inputs->create();

        Patient::create($inputs);

        return back();

    }

    public function edit(Patient $patient){
        return view('patients.edit', ['patients'=>$patient]);
    }
}
