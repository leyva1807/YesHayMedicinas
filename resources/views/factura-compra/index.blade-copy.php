@extends('layouts.master')

@section('content')
    <!-- Contenido de la Página -->
    <div
        class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu 
               group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md 
               group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm 
               pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 
               group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 
               group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl 
               group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto 
               group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto 
               group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] 
               group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <!-- Título y Navegación -->
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Vista de Lista</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li
                        class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1 
                               before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 
                               before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Productos</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Vista de Lista
                    </li>
                </ul>
            </div>
            <!-- Botón Añadir Factura -->
            <div class="flex justify-end mb-4">
                <button class="px-4 py-2 text-white rounded-md bg-custom-500 hover:bg-custom-600 focus:bg-custom-600"
                    data-modal-open="addFacturaModal">
                    Añadir Factura
                </button>
            </div>
            <!-- Buscador y Filtros -->
            <div class="card" id="productListTable">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-3">
                            <div class="relative">
                                <input type="text"
                                    class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Buscar..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                        </div><!--end col-->
                        <div class="xl:col-span-2">
                            <div>
                                <input type="text"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true"
                                    readonly="readonly" placeholder="Seleccionar Fecha">
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
            </div><!--end card-->

            <!-- Lista de Facturas -->
            <div class="card" id="facturaListTable">
                <div class="card-body">
                    @if ($facturaCompras->isEmpty())
                        <p class="text-center">No hay facturas disponibles.</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
                                    <tr>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">ID Factura</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Número Factura</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Fecha Factura</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">ID Envío</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Total Factura</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Proveedor</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Creado</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Modificado</th>
                                        <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturaCompras as $facturaCompra)
                                        <tr>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->id }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->numero_factura }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->fecha_factura }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->envio_id }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->total_factura }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->proveedor }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->created_at }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $facturaCompra->updated_at }}</td>
                                            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                                <a href="{{ route('factura-compra.edit', $facturaCompra->id) }}" class="text-custom-500 hover:text-custom-600">
                                                    <i data-lucide="pencil" class="w-5 h-5"></i>
                                                </a>
                                                <form action="{{ route('factura-compra.destroy', $facturaCompra->id) }}" method="POST" class="inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-transparent border-none text-custom-500 hover:text-custom-600">
                                                        <i data-lucide="trash" class="w-5 h-5"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Paginación -->
                        <div class="mt-4">
                            {{ $facturaCompras->links() }}
                        </div>
                    @endif
                </div>
            </div><!--end card-->
        </div><!-- container-fluid -->

        <!-- Modal para Añadir Factura -->
        <div id="addFacturaModal" modal-center=""
            class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4">
            <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
                <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                    <h5 class="text-16">Añadir Factura</h5>
                    <button data-modal-close="addFacturaModal"
                        class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500">
                        <i data-lucide="x" class="w-5 h-5"></i>
                    </button>
                </div>
                <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                    <form action="{{ route('factura-compra.save') }}" method="POST">
                        @csrf <!-- Token de protección contra CSRF -->
                        <input type="hidden" value="" name="id" id="id">
                        <input type="hidden" value="add" name="action" id="action">
                        <input type="hidden" id="id-field">
                        <div id="alert-error-msg"
                            class="hidden px-4 py-3 text-sm text-red-500 border border-transparent rounded-md bg-red-50 dark:bg-red-500/20">
                        </div>
                        <div class="grid grid-cols-1 gap-4 xl:grid-cols-12">
                            <div class="xl:col-span-12">
                                <label for="facturaId" class="inline-block mb-2 text-base font-medium">ID Factura</label>
                                <input type="text" id="facturaId"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    disabled>
                            </div>
                            <div class="xl:col-span-12">
                                <label for="numeroFacturaInput"
                                    class="inline-block mb-2 text-base font-medium">Número de Factura</label>
                                <input type="text" name="numero_factura" id="numeroFacturaInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Número de Factura">
                            </div>
                            <div class="xl:col-span-12">
                                <label for="fechaFacturaInput"
                                    class="inline-block mb-2 text-base font-medium">Fecha de Factura</label>
                                <input type="text" name="fecha_factura" id="fechaFacturaInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Fecha de Factura" data-provider="flatpickr"
                                    data-date-format="d M, Y">
                            </div>
                            <div class="xl:col-span-12">
                                <label for="envioIdInput" class="inline-block mb-2 text-base font-medium">ID Envío</label>
                                <input type="text" name="envio_id" id="envioIdInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="ID Envío">
                            </div>
                            <div class="xl:col-span-12">
                                <label for="totalFacturaInput" class="inline-block mb-2 text-base font-medium">Total Factura</label>
                                <input type="text" name="total_factura" id="totalFacturaInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Total Factura">
                            </div>
                            <div class="xl:col-span-12">
                                <label for="proveedorInput" class="inline-block mb-2 text-base font-medium">Proveedor</label>
                                <input type="text" name="proveedor" id="proveedorInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Proveedor">
                            </div>
                        </div>
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset" id="close-modal" data-modal-close="addFacturaModal"
                                class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancelar</button>
                            <button type="submit" id="addNew"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Añadir Factura</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <!-- Lista de productos Init JS -->
        <script src="{{ URL::to('assets/js/pages/apps-ecommerce-factura.init') }}"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Lógica para abrir el modal
                document.querySelectorAll('[data-modal-open]').forEach(button => {
                    button.addEventListener('click', function() {
                        const modal = document.getElementById(this.getAttribute('data-modal-open'));
                        if (modal) {
                            modal.classList.remove('hidden');
                        }
                    });
                });
                // Lógica para cerrar el modal
                document.querySelectorAll('[data-modal-close]').forEach(button => {
                    button.addEventListener('click', function() {
                        const modal = document.getElementById(this.getAttribute('data-modal-close'));
                        if (modal) {
                            modal.classList.add('hidden');
                        }
                    });
                });
            });
        </script>
    @endsection
