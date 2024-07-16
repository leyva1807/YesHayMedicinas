@extends('layouts.app')

@section('template_title')
    {{ __('Update Factura Compra') }}
@endsection

@section('content')
    <section class="container-fluid content">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Update Factura Compra') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('factura-compra.update', $facturaCompra->id) }}" role="form" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            @include('factura-compra.form')

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                                <a href="{{ route('factura-compra.index') }}" class="btn btn-secondary">
                                    {{ __('Cancel') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
