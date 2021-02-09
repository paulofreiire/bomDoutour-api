<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::orderBy('created_at', 'desc')->get();
        return response()->json(['patients' => $patients], 200);
    }

    public function store(Request $request)
    {
        $patient = new Patient;

        $patient->name = $request->name;
        $patient->gender = $request->gender;
        $patient->dateBirt = $request->dateBirt;
        $patient->document = $request->document;

        $patient->save();

        return response()->json(['patient' => $patient], 200);
    }
}
