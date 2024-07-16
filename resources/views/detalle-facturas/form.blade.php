<div class="form-group">
    <label for="factura_compra_id">{{ __('Factura Compra Id') }}</label>
    <input type="text" name="factura_compra_id" id="factura_compra_id" class="form-control" 
        value="{{ old('factura_compra_id', $detalleFactura->factura_compra_id ?? $id) }}" required>
</div>

<div class="form-group">
    <label for="medicamento_id">{{ __('Medicamento Id') }}</label>
    <input type="text" name="medicamento_id" id="medicamento_id" class="form-control" 
        value="{{ old('medicamento_id', $detalleFactura->medicamento_id ?? '') }}" required>
</div>

<div class="form-group">
    <label for="categoria_medicamento_id">{{ __('Categoria Medicamento Id') }}</label>
    <input type="text" name="categoria_medicamento_id" id="categoria_medicamento_id" class="form-control" 
        value="{{ old('categoria_medicamento_id', $detalleFactura->categoria_medicamento_id ?? '') }}" required>
</div>

<div class="form-group">
    <label for="cantidad">{{ __('Cantidad') }}</label>
    <input type="number" name="cantidad" id="cantidad" class="form-control" 
        value="{{ old('cantidad', $detalleFactura->cantidad ?? '') }}" required>
</div>

<div class="form-group">
    <label for="precio_unitario">{{ __('Precio Unitario') }}</label>
    <input type="number" step="0.01" name="precio_unitario" id="precio_unitario" class="form-control" 
        value="{{ old('precio_unitario', $detalleFactura->precio_unitario ?? '') }}" required>
</div>

<div class="form-group">
    <label for="precio_total">{{ __('Precio Total') }}</label>
    <input type="number" step="0.01" name="precio_total" id="precio_total" class="form-control" 
        value="{{ old('precio_total', $detalleFactura->precio_total ?? '') }}" required>
</div>

<div class="form-group">
    <label for="imagen">{{ __('Imagen') }}</label>
    <input type="url" name="imagen" id="imagen" class="form-control" 
        value="{{ old('imagen', $detalleFactura->imagen ?? '') }}" required>
</div>

<div class="form-group">
    <label for="fecha_vencimiento">{{ __('Fecha Vencimiento') }}</label>
    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" 
        value="{{ old('fecha_vencimiento', $detalleFactura->fecha_vencimiento ?? '') }}" required>
</div>
