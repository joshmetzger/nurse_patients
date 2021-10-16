<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //
    public function index(){

        $patient = Patient::all();

        return view('patients.index');
    }
}
