<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\EstadoCita;

class EstadoCitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $estadoCitas = EstadoCita::all();
        return response()->json($estadoCitas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);

        $estadoCita = EstadoCita::create($request->all());
        return response()->json($estadoCita, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $estadoCita = EstadoCita::find($id);
        if (!$estadoCita) {
            return response()->json(['message' => 'Estado de cita no encontrado'], 404);
        }
        return response()->json($estadoCita);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:1000',
        ]);

        $estadoCita = EstadoCita::findOrFail($id);
        $estadoCita->update($request->only('nombre', 'descripcion'));

        return response()->json($estadoCita);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $estadoCita = EstadoCita::find($id);
        $estadoCita->delete();

        return response()->json(null, 204);
    }
}
