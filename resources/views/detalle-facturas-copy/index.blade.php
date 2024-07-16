@extends('layouts.master')
@section('content')
    <div class="py-12">
        <div class="max-w-full mx-auto space-y-6 sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="w-full">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">{{ __('Detalle Facturas') }}</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the {{ __('Detalle Facturas') }}.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{ route('detalle-facturas.create', ['id' => $someIdVariable]) }}" class="block px-3 py-2 text-sm font-semibold text-center text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add new</a>
                        </div>
                    </div>

                    <div class="flow-root">
                        <div class="mt-8 overflow-x-auto">
                            <div class="inline-block min-w-full py-2 align-middle">
                                <table class="w-full divide-y divide-gray-300">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">No</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Factura Compra Id</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Medicamento Id</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Categoria Medicamento Id</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Cantidad</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Precio Unitario</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Precio Total</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Imagen</th>
                                            <th scope="col" class="py-3 pl-4 pr-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase">Fecha Vencimiento</th>
                                            <th scope="col" class="px-3 py-3 text-xs font-semibold tracking-wide text-left text-gray-500 uppercase"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($detalleFacturas as $detalleFactura)
                                            <tr class="even:bg-gray-50">
                                                <td class="py-4 pl-4 pr-3 text-sm font-semibold text-gray-900 whitespace-nowrap">{{ $loop->iteration }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->factura_compra_id }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->medicamento_id }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->categoria_medicamento_id }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->cantidad }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->precio_unitario }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->precio_total }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->imagen }}</td>
                                                <td class="px-3 py-4 text-sm text-gray-500 whitespace-nowrap">{{ $detalleFactura->fecha_vencimiento }}</td>
                                                <td class="py-4 pl-4 pr-3 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                    <form action="{{ route('detalle-facturas.destroy', $detalleFactura->id) }}" method="POST">
                                                        <a href="{{ route('detalle-facturas.show', $detalleFactura->id) }}" class="mr-2 font-bold text-gray-600 hover:text-gray-900">{{ __('Show') }}</a>
                                                        <a href="{{ route('detalle-facturas.edit', $detalleFactura->id) }}" class="mr-2 font-bold text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-bold text-red-600 hover:text-red-900" onclick="return confirm('Are you sure to delete?')">{{ __('Delete') }}</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- Paginación -->
                                <div class="px-4 mt-4">
                                    {!! $detalleFacturas->withQueryString()->links() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
