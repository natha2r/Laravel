<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    
    use HasFactory;

    protected $table = 'empleados'; 
    public $timestamps = false;
    protected $fillable = [
        'idEmpleados',
        'nombreEmpleado',
        'rol',
        'fechaContratacion',
        'salario',
        'edad',
        'telefono',
        'direccion',
        'email',
        'usuario',
    ];

    protected $primaryKey = 'idEmpleados';
    public $incrementing = false;
    protected $keyType = 'string'; 
}
