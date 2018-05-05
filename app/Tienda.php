<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

/**
 * Class Tienda
 *
 * @property string $nombre
 * @property string $direccion
 * @property string $gerente
 *
 * @package App\
 */

class Tienda extends Eloquent
{
    protected $collection = 'tiendas';

    protected $fillable = [
		'nombre',
		'direccion',
		'gerente'
	];
}
