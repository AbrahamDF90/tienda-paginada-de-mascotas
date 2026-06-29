<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = [ //bloquea asignacion masiva, osea das permiso para cargar estos campos 
        'nombre',
        'descripcion',
        'precio',
        'categoria_id',
    ];
 public function categoria() { 
return $this->belongsTo(Categoria::class); 
} 
}
