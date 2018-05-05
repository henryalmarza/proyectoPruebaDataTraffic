<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;


class CreateProductosTiendasCollection extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productostiendas', function (Blueprint $collection) {
           $collection->date('fechacompra'); 
	         $collection->integer('cantidad');
           $collection->float('precio');
           $collection->hasMany('productos');
           $collection->hasMany('tiendas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productostiendas');
    }
}