<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function index()
    {
        $consultations = Consultation::orderBy('created_at', 'desc')->get();
        foreach($consultations as $consultation){
            $consultation->patient($consultation->patient);
        }

        return response()->json(['consultations' => $consultations], 200);
    }

    public function store(Request $request)
    {
        $consultation = new Consultation;

        $consultation->text = $request->text;
        $consultation->patient_id = $request->patient_id;

        $consultation->save();
        $consultation->patient($consultation->patient);

        return response()->json(['consultation' => $consultation], 200);
    }

    public function show($id)
    {
        $consultation = Consultation::find($id);
        return response()->json(['consultation' => $consultation], 200);
    }
}
