<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function store(Request $request)
    {

        $request->validate([
            'idProveedores' => 'required|string|max:10',
            'nombreEmpresa' => 'required|string|max:50',
            'contacto' => 'required|string|max:30',
            'telefono' => 'required|string|max:30',
            'email' => 'nullable|string|max:50',
            'direccion' => 'nullable|string|max:50',
            'terminoPago' => 'nullable|string|max:30',
        ]);

        $proveedor = Proveedor::create($request->all());

        return response()->json(['message' => 'Proveedor creado correctamente', 'proveedor' => $proveedor], 201);
    }

    public function index()
    {
        $proveedores = Proveedor::all();
        return response()->json($proveedores);
    }

    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        return response()->json($proveedor);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombreEmpresa' => 'nullable|string|max:50',
            'contacto' => 'nullable|string|max:30',
            'telefono' => 'nullable|string|max:30',
            'email' => 'nullable|string|max:50',
            'direccion' => 'nullable|string|max:50',
            'terminoPago' => 'nullable|string|max:30',
        ]);

        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        $proveedor->update($request->all());

        return response()->json(['message' => 'Proveedor actualizado correctamente', 'proveedor' => $proveedor]);
    }

    public function destroy($id)
    {
        $proveedor = Proveedor::find($id);

        if (!$proveedor) {
            return response()->json(['message' => 'Proveedor no encontrado'], 404);
        }

        $proveedor->delete();

        return response()->json(['message' => 'Proveedor eliminado correctamente']);
    }
}
