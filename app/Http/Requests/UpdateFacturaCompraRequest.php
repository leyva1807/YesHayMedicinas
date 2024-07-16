<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFacturaCompraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'numero_factura' => 'required|unique:factura_compras,numero_factura,' . $this->route('facturaCompra')->id,
            'proveedor' => 'required|string|max:255',
            'fecha_factura' => 'required|date',
            'total_factura' => 'required|numeric',
        ];
    }
}
