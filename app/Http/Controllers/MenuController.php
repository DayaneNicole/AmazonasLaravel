<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use App\Models\Categoria;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        $platosQuery = Plato::query();

        if ($request->has('categoria')) {
            $platosQuery->where('categoria_id', $request->categoria);
        }

        if ($request->has('buscar')) {
            $platosQuery->where('nombre', 'like', '%' . $request->buscar . '%');
        }

        $platos = $platosQuery->paginate(12);

        return view('menu', compact('platos', 'categorias'));
    }
}
