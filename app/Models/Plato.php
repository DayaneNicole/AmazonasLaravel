<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria_id', 'imagen', 'disponible_delivery'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
