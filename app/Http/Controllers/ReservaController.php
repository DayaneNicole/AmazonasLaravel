<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Mesa;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('reserva', compact('mesas'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required',
            'personas' => 'required|integer|min:1',
            'mesa_id' => 'required|exists:mesas,id',
            'nombre' => 'required|string',
            'email' => 'required|email',
            'telefono' => 'required|string',
        ]);

        $reserva = Reserva::create($validatedData);

        return redirect()->route('home')->with('success', 'Reserva realizada con éxito.');
    }
}
