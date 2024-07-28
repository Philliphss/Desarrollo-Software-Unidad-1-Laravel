<?php

namespace App\Http\Controllers;


use App\Models\Proyecto;
use Illuminate\Http\Request;


class ProyectoController extends Controller
{
    public function index()
    {
        return Proyecto::all();
    }

    public function store(Request $request)
    {
        $proyecto = Proyecto::create($request->all());
        return response()->json($proyecto, 201);
    }

    public function show($id)
    {
        return Proyecto::find($id);
    }

    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());
        return response()->json($proyecto, 200);
    }

    public function destroy($id)
    {
        Proyecto::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    // Métodos para las vistas
    public function indexView()
    {
        $proyectos = Proyecto::all();
        return view('index', compact('proyectos'));
    }

    public function createView()
    {
        return view('crear');
    }

    public function editView($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('editar', compact('proyecto'));
    }

    public function showView($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('mostrar', compact('proyecto'));
    }
}
