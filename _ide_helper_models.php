<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $category_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryProduction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class CategoryProduction extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $factura_compra_id
 * @property int $medicamento_id
 * @property int $categoria_medicamento_id
 * @property int $cantidad
 * @property string $precio_unitario
 * @property string $precio_total
 * @property string|null $imagen
 * @property string|null $fecha_vencimiento
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\DetalleFacturaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura query()
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereCantidad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereCategoriaMedicamentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereFacturaCompraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereFechaVencimiento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereMedicamentoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura wherePrecioTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura wherePrecioUnitario($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DetalleFactura whereUpdatedAt($value)
 */
	class DetalleFactura extends \Eloquent {}
}

namespace App\Models{
/**
 * Class FacturaCompra
 *
 * @property $id
 * @property $numero_factura
 * @property $fecha_factura
 * @property $envio_id
 * @property $total_factura
 * @property $proveedor
 * @property $created_at
 * @property $updated_at
 * @property DetalleFactura[] $detalleFacturas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @property-read int|null $detalle_facturas_count
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra query()
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereEnvioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereFechaFactura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereNumeroFactura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereProveedor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereTotalFactura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FacturaCompra whereUpdatedAt($value)
 */
	class FacturaCompra extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $gender
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gender whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Gender extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property mixed $id
 * @property string $nombre
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Medicamento> $medicamentos
 * @property-read int|null $medicamentos_count
 * @method static \Database\Factories\MarcaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Marca newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marca whereUpdatedAt($value)
 */
	class Marca extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property mixed $id
 * @property string $nombre
 * @property int $unidad_medida_id
 * @property int $categoria_id
 * @property string|null $descripcion
 * @property int $marca_id
 * @property int $status_product_id
 * @property string|null $imagen
 * @property int $stock
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Marca $marca
 * @property-read \App\Models\StatusProduct $statusProduct
 * @property-read \App\Models\unidade_medida $unidadMedida
 * @method static \Database\Factories\MedicamentoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereCategoriaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereMarcaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereStatusProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereUnidadMedidaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicamento whereUpdatedAt($value)
 */
	class Medicamento extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $product_type_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereProductTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ProductType extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $size
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Size newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Size query()
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Size whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class Size extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $status_name
 * @method static \Illuminate\Database\Eloquent\Builder|StatusProduct whereStatusName($value)
 */
	class StatusProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $tax_applicable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable query()
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereTaxApplicable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TAXApplicable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class TAXApplicable extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $user_id
 * @property string $email
 * @property string|null $join_date
 * @property string|null $last_login
 * @property string|null $phone_number
 * @property string|null $status
 * @property string|null $role_name
 * @property string|null $avatar
 * @property string|null $position
 * @property string|null $department
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereJoinDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRoleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $visibility
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visibility whereVisibility($value)
 * @mixin \Eloquent
 */
	class Visibility extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $fecha_envio
 * @property string $fecha_entrega
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\envioFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|envio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|envio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|envio query()
 * @method static \Illuminate\Database\Eloquent\Builder|envio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|envio whereFechaEntrega($value)
 * @method static \Illuminate\Database\Eloquent\Builder|envio whereFechaEnvio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|envio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|envio whereUpdatedAt($value)
 */
	class envio extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id Identificador de la moneda
 * @property string $nombre
 * @property string $codigo
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\monedaFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|moneda newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda query()
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereCodigo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|moneda whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class moneda extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder|unidade_medida newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|unidade_medida newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|unidade_medida query()
 * @mixin \Eloquent
 */
	class unidade_medida extends \Eloquent {}
}

