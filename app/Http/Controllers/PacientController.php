<?php

namespace App\Http\Controllers;

use App\Models\Pacient;
use Illuminate\Http\Request;

class PacientController extends Controller
{

    public function index()
    {
        $pacients = Pacient::all();
        return response()->json(['pacients' => $pacients], 200);
    }

    public function store(Request $request)
    {
        $pacient = new Pacient;

        $pacient->name = $request->name;
        $pacient->gender = $request->gender;
        $pacient->dateBirt = $request->dateBirt;
        $pacient->document = $request->document;

        $pacient->save();

        return response()->json(['pacient' => $pacient], 200);
    }
}
