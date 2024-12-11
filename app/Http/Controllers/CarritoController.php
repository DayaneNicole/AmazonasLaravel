<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class CarritoController extends Controller
{
    public function index()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito', compact('carrito'));
    }

    public function agregar(Request $request)
    {
        $plato = Plato::findOrFail($request->plato_id);
        $carrito = session()->get('carrito', []);

        if(isset($carrito[$plato->id])) {
            $carrito[$plato->id]['cantidad']++;
        } else {
            $carrito[$plato->id] = [
                "nombre" => $plato->nombre,
                "cantidad" => 1,
                "precio" => $plato->precio,
                "imagen" => $plato->imagen
            ];
        }

        session()->put('carrito', $carrito);
        return redirect()->back()->with('success', 'Producto agregado al carrito exitosamente.');
    }
}
