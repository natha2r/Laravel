<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    public $timestamps = false;
    protected $primaryKey = 'idProveedores';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'idProveedores',
        'nombreEmpresa',
        'contacto',
        'telefono',
        'email',
        'direccion',
        'terminoPago',
    ];
}

