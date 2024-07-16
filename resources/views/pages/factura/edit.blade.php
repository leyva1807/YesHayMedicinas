@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="container p-4 mx-auto">
        <div class="overflow-hidden bg-white rounded-lg shadow dark:bg-gray-800">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-white">Edit Invoice</h3>
                <div class="mt-3 mb-4">
                    <nav class="flex items-center text-sm">
                        <a href="{{ route('factura.index') }}" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">Invoices</a>
                        <span class="mx-2 text-gray-400 dark:text-gray-500">/</span>
                        <span class="text-gray-700 dark:text-gray-300">Edit Invoice</span>
                    </nav>
                </div>
                <form method="POST" action="{{ route('factura.update', $factura->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                        <div>
                            <label for="numero_factura" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Invoice Number</label>
                            <input type="text" name="numero_factura" id="numero_factura" value="{{ $factura->numero_factura }}" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="proveedor" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Supplier</label>
                            <input type="text" name="proveedor" id="proveedor" value="{{ $factura->proveedor }}" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="fecha_factura" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Invoice Date</label>
                            <input type="date" name="fecha_factura" id="fecha_factura" value="{{ $factura->fecha_factura }}" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <div>
                            <label for="total_factura" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Total Amount</label>
                            <input type="number" step="0.01" name="total_factura" id="total_factura" value="{{ $factura->total_factura }}" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm dark:bg-gray-900 dark:border-gray-700 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Page-content -->
@endsection

@section('script')
    <!--invoice edit init js-->
    <script src="{{ URL::to('assets/js/pages/apps-ecommerce-product.init.js') }}"></script>
@endsection
