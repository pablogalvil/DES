<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'precio',
        'stock',
        'categoria_id'
    ];

    public function ventas(){
        return $this->hasMany(Venta::class);
    }

    public function categoria(){
        return $this->hasOne(Categoria::class);
    }
}
