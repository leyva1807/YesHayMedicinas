<?php

namespace App\Http\Controllers;

use App\Models\categoria_medicamento;
use App\Http\Requests\Storecategoria_medicamentoRequest;
use App\Http\Requests\Updatecategoria_medicamentoRequest;

class CategoriaMedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecategoria_medicamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria_medicamento $categoria_medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria_medicamento $categoria_medicamento)
    {
        //
    }

    /**
     *Actualice el recurso especificado en almacenamiento.
     */
    public function update(Updatecategoria_medicamentoRequest $request, categoria_medicamento $categoria_medicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria_medicamento $categoria_medicamento)
    {
        //
    }
}