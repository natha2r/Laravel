<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    // Crear un nuevo empleado
    public function store(Request $request)
    {
        $empleado = Empleado::create($request->all());
        return response()->json($empleado, 201);
    }

    // Obtener todos los empleados
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    // Obtener un empleado por su id
    public function show($id)
    {
        $empleado = Empleado::find($id);
        if ($empleado) {
            return response()->json($empleado);
        }
        return response()->json(['message' => 'Empleado no encontrado'], 404);
    }

    // Actualizar un empleado
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        if ($empleado) {
            $empleado->update($request->all());
            return response()->json($empleado);
        }
        return response()->json(['message' => 'Empleado no encontrado'], 404);
    }

    // Eliminar un empleado
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        if ($empleado) {
            $empleado->delete();
            return response()->json(['message' => 'Empleado eliminado']);
        }
        return response()->json(['message' => 'Empleado no encontrado'], 404);
    }
}