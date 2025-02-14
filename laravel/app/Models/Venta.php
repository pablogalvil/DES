<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'total',
        'cliente_id'
    ];

    public function cliente(){
        return $this->hasOne(Cliente::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
