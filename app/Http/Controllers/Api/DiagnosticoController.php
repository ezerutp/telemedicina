<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\Diagnostico;

class DiagnosticoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $diagnosticos = Diagnostico::all();
        return response()->json($diagnosticos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_cie10' => 'required|string|max:50|unique:diagnosticos,codigo_cie10',
            'descripcion' => 'required|string|max:1000',
        ]);

        $diagnostico = Diagnostico::create($request->all());
        return response()->json($diagnostico, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $diagnostico = Diagnostico::find($id);
        if (!$diagnostico) {
            return response()->json(['message' => 'Diagnóstico no encontrado'], 404);
        }
        return response()->json($diagnostico);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'codigo_cie10' => 'required|string|max:50|unique:diagnosticos,codigo_cie10',
            'descripcion' => 'required|string|max:1000',
        ]);

        $diagnostico = Diagnostico::findOrFail($id);
        $diagnostico->update($request->only('nombre', 'codigo_cie10', 'descripcion'));
        
        return response()->json($diagnostico);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $diagnostico = Diagnostico::findOrFail($id);
        $diagnostico->delete();

        return response()->json(null, 204);
    }
}
