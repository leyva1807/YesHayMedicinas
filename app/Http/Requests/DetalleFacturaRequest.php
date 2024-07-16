<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetalleFacturaRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'factura_compra_id' => 'required',
			'medicamento_id' => 'required',
			'categoria_medicamento_id' => 'required',
			'cantidad' => 'required',
			'precio_unitario' => 'required',
			'precio_total' => 'required',
			'imagen' => 'string',
        ];
    }
}
