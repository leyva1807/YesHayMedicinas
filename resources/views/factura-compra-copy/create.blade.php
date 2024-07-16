@extends('layouts.app')

@section('template_title')
    {{ __('Create Factura Compra') }}
@endsection

@section('content')
    <section class="container-fluid content">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Create Factura Compra') }}</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('factura-compra.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('factura-compra.form')

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
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
