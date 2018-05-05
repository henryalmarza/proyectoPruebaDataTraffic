<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Proveedor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$productos = DB::collection('productos')->get();

        return view('productoindex', compact('productos'));*/

        return Producto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('productoadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre =  $request->input('nombre');
        $producto->descripcion =  $request->input('descripcion');
        $producto->codigobarras =  $request->input('codigobarras');

        $proveedores = DB::collection('proveedores')->where('_id', 'in', $request->input('proveedores'))->get();
        $producto->proveedores =  $proveedores;

        $producto->save();

        //$productos = DB::collection('productos')->get();

        //return view('productoindex', compact('productos'));

        $resp= response()->json($producto, 201);

        return $resp;
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = DB::collection('productos')->where('_id', $id)->get();

        //return view('productoview', compact('producto'));

        response()->json($producto, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$producto = DB::collection('productos')->where('_id', $id)->get();

        return view('productoedit', compact('producto'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedores = DB::collection('proveedores')->where('_id', 'in', $request->input('proveedores'))->get();

        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->codigobarras = $request->codigobarras;
        $producto->proveedores = $request->proveedores;
        $producto->save();

        $resp= response()->json($producto, 200);

        return $resp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)   
    {
        /*DB::collection('productos')->where('_id', $id)->delete();
        $productos = DB::collection('productos')->get();

        return view('productoindex', compact('productos'));*/
        $producto = Producto::find($id);
        $producto->delete();

        $resp= response()->json($producto, 200);

        return $resp;
    }
}
