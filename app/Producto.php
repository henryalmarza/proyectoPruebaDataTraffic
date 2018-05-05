<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Proveedor as Proveedor;

/**
 * Class Producto
 *
 * @property string $nombre
 * @property string $descripcion
 * @property string $codigobarras
 * @property Provedor $proveedores
 *
 * @package App\
 */

class Producto extends Eloquent
{
    protected $collection = 'productos';

    protected $fillable = [
		'nombre',
		'descripcion',
		'codigobarras',
		'proveedores'
	];

	public function proveedor()
	{
		return $this->embedsMany('Proveedor');
	}
}
