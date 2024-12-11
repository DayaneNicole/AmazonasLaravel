<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;
use App\Models\Promocion;

class HomeController extends Controller
{
    public function index()
    {
        $featuredDishes = Plato::inRandomOrder()->take(3)->get();
        $promotions = Promocion::where('active', true)->take(2)->get();
        
        return view('home', compact('featuredDishes', 'promotions'));
    }
}
