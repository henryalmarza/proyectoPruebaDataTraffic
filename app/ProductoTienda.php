<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Producto as Producto;
use App\Tienda as Tienda;

/**
 * Class Tienda
 *
 * @property \Carbon\Carbon $fechacompra
 * @property int $cantidad
 * @property float $precio
 *
 * @package App\
 */

class ProductoTienda extends Eloquent
{
    protected $collection = 'productostiendas';

    protected $casts = [
		'cantidad' => 'int',
		'precio' => 'float'
	];

	protected $dates = [
		'fechacompra'
	];

	protected $fillable = [
		'fechacompra',
		'cantidad',
		'precio'
	];

	public function producto()
	{
		return $this->embedsMany('Producto');
	}

	public function tienda()
	{
		return $this->embedsMany('Tienda');
	}
}