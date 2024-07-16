<?php

namespace App\Http\Controllers;

use App\Models\FacturaCompra;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FacturaCompraRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FacturaCompraController extends Controller
{
    /**
     * Muestra una lista de los recursos.
     */
    public function index(Request $request): View
    {
        // Paginación de los registros de FacturaCompra
        $facturaCompras = FacturaCompra::paginate(10);

        return view('factura-compra.index', compact('facturaCompras'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create(): View
    {
        $facturaCompra = new FacturaCompra();

        return view('factura-compra.create', compact('facturaCompra'));
    }

    /**
     * Almacena un recurso recién creado en el almacenamiento.
     */
    public function store(FacturaCompraRequest $request): RedirectResponse
    {
        FacturaCompra::create($request->validated());

        return Redirect::route('factura-compra.index')
            ->with('success', 'FacturaCompra creada exitosamente.');
    }

    /**
     * Muestra el recurso especificado.
     */
    public function show($id): View
    {
        $facturaCompra = FacturaCompra::findOrFail($id);

        return view('factura-compra.show', compact('facturaCompra'));
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit($id): View
    {
        $facturaCompra = FacturaCompra::findOrFail($id);

        return view('factura-compra.edit', compact('facturaCompra'));
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     */
    public function update(FacturaCompraRequest $request, $id): RedirectResponse
    {
        $facturaCompra = FacturaCompra::findOrFail($id);
        $facturaCompra->update($request->validated());

        return Redirect::route('factura-compra.index')
            ->with('success', 'FacturaCompra actualizada exitosamente.');
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     */
    public function destroy($id): RedirectResponse
    {
        $facturaCompra = FacturaCompra::findOrFail($id);
        $facturaCompra->delete();

        return Redirect::route('factura-compra.index')
            ->with('success', 'FacturaCompra eliminada exitosamente.');
    }
  /** save record factura */  
public function saveRecordFactura(Request $request): RedirectResponse
{
    $request->validate([
        'numero_factura' => 'required|string|max:255',
        'fecha_factura' => 'required|date_format:Y-m-d',
        'envio_id' => 'required|string|max:255',
        'total_factura' => 'required|numeric',
        'proveedor' => 'required|string|max:255',
    ]);

    $facturaCompra = new FacturaCompra();
    $facturaCompra->numero_factura = $request->numero_factura;
    $facturaCompra->fecha_factura = $request->fecha_factura; // Asegurarse de que la fecha esté en formato Y-m-d
    $facturaCompra->envio_id = $request->envio_id;
    $facturaCompra->total_factura = $request->total_factura;
    $facturaCompra->proveedor = $request->proveedor;
    $facturaCompra->save();

    return redirect()->route('factura-compra.index')
        ->with('success', 'Factura creada exitosamente.');
}
  
}
