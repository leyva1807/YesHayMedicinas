<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use App\Http\Requests\StoremedicamentoRequest;
use App\Http\Requests\UpdatemedicamentoRequest;

class MedicamentoController extends Controller
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
    public function store(StoremedicamentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemedicamentoRequest $request, medicamento $medicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(medicamento $medicamento)
    {
        //
    }
}
