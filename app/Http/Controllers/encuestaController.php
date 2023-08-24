<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuesta;

class encuestaController extends Controller
{
    public function show()
    {
        return view('index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'pregunta1' => 'required',
            'pregunta2' => 'required',
            'pregunta3' => 'required',
            'pregunta4' => 'required',
            'pregunta5' => 'required',
        ]);

        Encuesta::create($data);

        return redirect('/gracias')->with('success', 'Gracias por completar la encuesta');
    }
}
