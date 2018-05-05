<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * Class Proveedor
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $telefono
 *
 * @package App\
 */

class Proveedor extends Eloquent
{
    protected $collection = 'proveedores';

    protected $fillable = [
		'nombre',
		'direccion',
		'telefono'
	];
}