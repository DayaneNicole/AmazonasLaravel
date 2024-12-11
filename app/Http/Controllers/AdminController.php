<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Mesa;
use App\Models\Reserva;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalPlatos = Plato::count();
        $totalMesas = Mesa::count();
        $totalReservas = Reserva::count();
        return view('admin.dashboard', compact('totalPlatos', 'totalMesas', 'totalReservas'));
    }

    public function platos()
    {
        $platos = Plato::with('categoria')->get();
        return view('admin.platos', compact('platos'));
    }

    public function mesas()
    {
        $mesas = Mesa::all();
        return view('admin.mesas', compact('mesas'));
    }

    public function reservas()
    {
        $reservas = Reserva::with(['mesa', 'user'])->get();
        return view('admin.reservas', compact('reservas'));
    }
}
