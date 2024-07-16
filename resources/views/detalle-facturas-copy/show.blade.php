@extends('layouts.master')

@section('template_title')
    {{ __('Show Detalle Factura') }}
@endsection

@section('content')
    <section class="container-fluid content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Show Detalle Factura') }}</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong>{{ __('Factura Compra Id') }}:</strong>
                            {{ $detalleFactura->factura_compra_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Medicamento Id') }}:</strong>
                            {{ $detalleFactura->medicamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Categoria Medicamento Id') }}:</strong>
                            {{ $detalleFactura->categoria_medicamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Cantidad') }}:</strong>
                            {{ $detalleFactura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Precio Unitario') }}:</strong>
                            {{ $detalleFactura->precio_unitario }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Precio Total') }}:</strong>
                            {{ $detalleFactura->precio_total }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Imagen') }}:</strong>
                            {{ $detalleFactura->imagen }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Fecha Vencimiento') }}:</strong>
                            {{ $detalleFactura->fecha_vencimiento }}
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('detalle-facturas.index') }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
