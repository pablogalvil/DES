<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';

    protected $fillable = [
        'nombre',
        'especie',
        'edad',
        'precio',
        'cliente_id'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }
}
