<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_persona',
        'estado',
        'correo',
        'username',
        'password',
        'rol'
    ];

    public function Persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
}
