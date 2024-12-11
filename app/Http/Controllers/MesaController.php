<?php

namespace App\Http\Controllers;

use App\Models\Mesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    public function index()
    {
        $mesas = Mesa::all();
        return view('admin.mesas.index', compact('mesas'));
    }

    public function create()
    {
        return view('admin.mesas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero' => 'required|integer|unique:mesas',
            'capacidad' => 'required|integer|min:1',
        ]);

        Mesa::create($validatedData);

        return redirect()->route('admin.mesas.index')->with('success', 'Mesa creada exitosamente.');
    }

    public function edit(Mesa $mesa)
    {
        return view('admin.mesas.edit', compact('mesa'));
    }

    public function update(Request $request, Mesa $mesa)
    {
        $validatedData = $request->validate([
            'numero' => 'required|integer|unique:mesas,numero,' . $mesa->id,
            'capacidad' => 'required|integer|min:1',
        ]);

        $mesa->update($validatedData);

        return redirect()->route('admin.mesas.index')->with('success', 'Mesa actualizada exitosamente.');
    }

    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
        return redirect()->route('admin.mesas.index')->with('success', 'Mesa eliminada exitosamente.');
    }
}
