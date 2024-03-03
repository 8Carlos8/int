<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_persona',
        'estado',
        'razonsoc',
        'direccion'
    ];

    public function Persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
