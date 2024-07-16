@extends('layouts.master')
@section('content')
    <div class="container">
        <h2>Crear Factura</h2>
        <form method="POST" action="{{ route('factura.store') }}">
            @csrf
            <div class="form-group">
                <label for="numero_factura">Número de Factura</label>
                <input type="text" class="form-control" id="numero_factura" name="numero_factura" required>
            </div>
            <div class="form-group">
                <label for="fecha_factura">Fecha de Factura</label>
                <input type="date" class="form-control" id="fecha_factura" name="fecha_factura" required>
            </div>
            <div class="form-group">
                <label for="envio_id">Envío ID</label>
                <input type="text" class="form-control" id="envio_id" name="envio_id" required>
            </div>
            <div class="form-group">
                <label for="total_factura">Total de Factura</label>
                <input type="text" class="form-control" id="total_factura" name="total_factura" required>
            </div>
            <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <input type="text" class="form-control" id="proveedor" name="proveedor" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection
