/*
Template Name: StarCode & Dashboard Template
Author: StarCode Kh
Version: 1.1.0
Website: https://StarCodeKh.in/
Contact: StarCodeKh@gmail.com
File: apps ecommerce product init Js File
*/

// Configuración de la tabla de lista de productos
var options = {
    valueNames: [
        "ID_Factura",
        "Numero_Factura",
        "Fecha_Factura",
        "Envio_ID",
        "Total_Factura",
        "Proveedor",
        "Creado",
        "Modificado",
        "Acciones"
    ],
    page: 7,
    pagination: true,
    plugins: [
        ListPagination({
            left: 2,
            right: 2,
        }),
    ],
};

// Evento para dropdown
function eventListenerDropdown(event, subitem, item, place) {
    subitem.classList.toggle("show");
    var popper = Popper.createPopper(subitem, item.querySelector(".dropdown-menu"), {
        placement: place
    });

    if (!subitem.classList.contains("show")) {
        item.querySelector(".dropdown-menu").classList.remove("block");
        item.querySelector(".dropdown-menu").classList.add("hidden");
    } else {
        dismissDropdownMenu();
        item.querySelector(".dropdown-menu").classList.add("block");
        item.querySelector(".dropdown-menu").classList.remove("hidden");
        subitem.classList.add("show");
        event.stopPropagation();
    }
}

// Gestionar menú dropdown
function dismissDropdownMenu() {
    document.querySelectorAll(".dropdown-menu").forEach(function (item) {
        item.classList.remove("block");
        item.classList.add("hidden");
    });
    document.querySelectorAll(".dropdown-toggle").forEach(function (item) {
        item.classList.remove("show");
    });
}

// Gestionar evento dropdown
function dropdownEvent(elements, place, isRemove = false) {
    elements.forEach(function (item) {
        if (isRemove) {
            item.removeEventListener('click', eventListenerDropdown);
        } else {
            item.querySelectorAll(".dropdown-toggle").forEach(function (subitem) {
                subitem.addEventListener("click", function (event) {
                    eventListenerDropdown(event, subitem, item, place);
                });
            });
        }
    });
}

function updateDropdown() {
    setTimeout(() => {
        drawerSetting();
        var allElements = document.querySelectorAll('.dropdown');
        var elementsWithoutClickListener = Array.from(allElements).filter(function (element) {
            return !element.onclick;
        });
        dropdownEvent(elementsWithoutClickListener, 'bottom-start', true);
        dropdownEvent(elementsWithoutClickListener, 'bottom-start');
    }, 250);
}

var facturaListTable = new List("facturaListTable", options).on("updated", function (list) {
    var noResultElement = document.querySelector(".noresult");
    if (noResultElement) {
        noResultElement.style.display = list.matchingItems.length ? "none" : "block";
    }

    var isFirst = list.i === 1;
    var isLast = list.i > list.matchingItems.length - list.page;
    document.querySelector(".pagination-prev").classList.toggle("disabled", isFirst);
    document.querySelector(".pagination-next").classList.toggle("disabled", isLast);

    const totalRecordsElement = facturaListTable.listContainer.querySelector(".total-records");
    const showingElement = facturaListTable.listContainer.querySelector(".showing");

    if (totalRecordsElement) totalRecordsElement.innerHTML = facturaListTable.items.length;
    if (showingElement) showingElement.innerHTML = facturaListTable.visibleItems.length;

    document.querySelector(".pagination-next").addEventListener("click", function () {
        document.querySelector(".pagination.listjs-pagination .active + .page a").click();
    });

    document.querySelector(".pagination-prev").addEventListener("click", function () {
        document.querySelector(".pagination.listjs-pagination .active").previousElementSibling.querySelector("a").click();
    });

    lucide.createIcons();
    collapseComponent();
});

// Función para establecer la clase de estado
function isStatus(val) {
    switch (val) {
        case "Scheduled":
            return 'status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent';
        case "Publish":
            return 'status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent';
        case "Inactive":
            return 'status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent';
        default:
            return '';
    }
}

// Solicitud para obtener datos JSON
const xhttp = new XMLHttpRequest();
xhttp.onload = function () {
    var jsonRecords = JSON.parse(this.responseText);
    jsonRecords.forEach(function (element) {
        facturaListTable.add({
            ID_Factura: `<a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600">${element.ID_Factura}</a>`,
            Numero_Factura: `<span class="Numero_Factura">${element.Numero_Factura}</span>`,
            Fecha_Factura: `<span class="Fecha_Factura">${element.Fecha_Factura}</span>`,
            Envio_ID: `<span class="Envio_ID">${element.Envio_ID}</span>`,
            Total_Factura: `<span class="Total_Factura">${element.Total_Factura}</span>`,
            Proveedor: `<span class="Proveedor">${element.Proveedor}</span>`,
            Creado: `<span class="Creado">${element.Creado}</span>`,
            Modificado: `<span class="Modificado">${element.Modificado}</span>`,
            Acciones: `<div class="relative dropdown">
                    <button class="flex items-center justify-center w-[30px] h-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="facturaAction1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="w-3 h-3"></i></button>
                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="facturaAction1">
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="{{ route('factura-compra.edit', element.ID_Factura) }}"><i data-lucide="eye" class="inline-block w-3 h-3 mr-1"></i> <span class="align-middle">Editar</span></a>
                        </li>
                        <li>
                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!" onclick="deleteFactura(${element.ID_Factura})"><i data-lucide="trash-2" class="inline-block w-3 h-3 mr-1"></i> <span class="align-middle">Eliminar</span></a>
                        </li>
                    </ul>
                </div>`,
        });
    });

    lucide.createIcons();
    collapseComponent();
    drawerSetting();

    var allElements = document.querySelectorAll('.dropdown');
    var elementsWithoutClickListener = Array.from(allElements).filter(function (element) {
        return !element.onclick;
    });

    setTimeout(() => {
        dropdownEvent(elementsWithoutClickListener, 'bottom-start');
    }, 250);

    // Paginación
    var pageLinks = document.querySelectorAll('#facturaListTable .listjs-pagination .page');
    pageLinks.forEach(function (link) {
        link.addEventListener("click", updateDropdown);
    });
}

// Cargar datos JSON
xhttp.open("GET", "{{ url('assets/json/factura-list.json') }}");
xhttp.send();

// Función para eliminar factura
function deleteFactura(id) {
    if (confirm('¿Estás seguro de que deseas eliminar esta factura?')) {
        document.getElementById(`delete-form-${id}`).submit();
    }
}

