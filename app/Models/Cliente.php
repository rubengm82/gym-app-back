<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'Clientes';
    
    protected $fillable = [
        'id_cliente',
        'nombre',
        'apellido1',
        'apellido2',
        'IBAN',
        'mail',
        'telefono',
        'estado',
    ];
}
