<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class DeliveryController extends Controller
{
    public function index()
    {
        $platosDisponibles = Plato::where('disponible_delivery', true)->get();
        return view('delivery', compact('platosDisponibles'));
    }
}
