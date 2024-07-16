<!-- Campos del formulario para FacturaCompra -->
<div class="form-group">
    <label for="numero_factura">{{ __('Número de Factura') }}</label>
    <input type="text" name="numero_factura" id="numero_factura" class="form-control" value="{{ old('numero_factura', $facturaCompra->numero_factura) }}">
</div>

<div class="form-group">
    <label for="fecha_factura">{{ __('Fecha de la Factura') }}</label>
    <input type="date" name="fecha_factura" id="fecha_factura" class="form-control" value="{{ old('fecha_factura', $facturaCompra->fecha_factura) }}">
</div>

<div class="form-group">
    <label for="envio_id">{{ __('Envío') }}</label>
    <input type="text" name="envio_id" id="envio_id" class="form-control" value="{{ old('envio_id', $facturaCompra->envio_id) }}">
</div>

<div class="form-group">
    <label for="total_factura">{{ __('Total de la Factura') }}</label>
    <input type="number" name="total_factura" id="total_factura" class="form-control" value="{{ old('total_factura', $facturaCompra->total_factura) }}">
</div>

<div class="form-group">
    <label for="proveedor">{{ __('Proveedor') }}</label>
    <input type="text" name="proveedor" id="proveedor" class="form-control" value="{{ old('proveedor', $facturaCompra->proveedor) }}">
</div>
