<?php

namespace App\Http\Controllers;

use App\Models\DetalleFactura;
use Illuminate\Http\Request;
use App\Http\Requests\DetalleFacturaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DetalleFacturaController extends Controller
{
    /**
     * Muestra una lista de los recursos.
     */
    public function index(Request $request): View
    {
        $detalleFacturas = DetalleFactura::paginate(10);
        // Obtén el ID necesario para la vista de creación. Aquí se muestra un ejemplo estático.
        $someIdVariable = 1; // Esto debería ser el ID real que necesitas pasar a la vista
        return view('detalle-facturas.index', compact('detalleFacturas', 'someIdVariable'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     * @param int $id
     */
    public function create(): View
    {
        $detalleFacturas = new detalleFactura();

        return view('detalle-facturas.create', compact('detalleFacturas'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(DetalleFacturaRequest $request): RedirectResponse
    {
        // Crea un nuevo registro de DetalleFactura con los datos validados
        DetalleFactura::create($request->validated());
        return Redirect::route('detalle-facturas.index')
            ->with('success', 'DetalleFactura creada exitosamente.');
    }

    /**
     * Muestra el recurso especificado.
     * @param int $id
     */
    public function show($id): View
    {
        // Encuentra el DetalleFactura especificado por su ID o lanza un error 404 si no se encuentra
        $detalleFactura = DetalleFactura::findOrFail($id);
        return view('detalle-facturas.show', compact('detalleFactura'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     * @param int $id
     */
    public function edit($id): View
    {
        // Encuentra el DetalleFactura especificado por su ID o lanza un error 404 si no se encuentra
        $detalleFactura = DetalleFactura::findOrFail($id);
        return view('detalle-facturas.edit', compact('detalleFactura'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     * @param DetalleFacturaRequest $request
     * @param int $id
     */
    public function update(DetalleFacturaRequest $request, $id): RedirectResponse
    {
        // Encuentra el DetalleFactura especificado por su ID, valida y actualiza sus datos
        $detalleFactura = DetalleFactura::findOrFail($id);
        $detalleFactura->update($request->validated());
        return Redirect::route('detalle-facturas.index')
            ->with('success', 'DetalleFactura actualizada exitosamente.');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     * @param int $id
     */
    public function destroy($id): RedirectResponse
    {
        // Encuentra el DetalleFactura especificado por su ID y lo elimina
        $detalleFactura = DetalleFactura::findOrFail($id);
        $detalleFactura->delete();
        return Redirect::route('detalle-facturas.index')
            ->with('success', 'DetalleFactura eliminada exitosamente.');
    }
}