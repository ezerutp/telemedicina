<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Models\TipoNotificacion;

class TipoNotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $tiposNotificacion = TipoNotificacion::all();
        return response()->json($tiposNotificacion);
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

        $tipoNotificacion = TipoNotificacion::create($request->all());
        return response()->json($tipoNotificacion, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tipoNotificacion = TipoNotificacion::find($id);
        if (!$tipoNotificacion) {
            return response()->json(['message' => 'Tipo de notificación no encontrado'], 404);
        }
        return response()->json($tipoNotificacion);
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

        $tipoNotificacion = TipoNotificacion::findOrFail($id);
        $tipoNotificacion->update($request->only('nombre', 'descripcion'));

        return response()->json($tipoNotificacion);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $tipoNotificacion = TipoNotificacion::findOrFail($id);
        $tipoNotificacion->delete();
        
        return response()->json(null, 204);
    }
}
