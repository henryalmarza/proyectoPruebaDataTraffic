<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = DB::collection('proveedores')->get();

        return view('proveedorindex', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedoradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor;
        $proveedor->nombre =  $request->input('nombre');
        $proveedor->direccion =  $request->input('direccion');
        $proveedor->telefono =  $request->input('telefono');
        $proveedor->save();
        $proveedores = DB::collection('proveedores')->get();

        return view('proveedorindex', compact('proveedores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = DB::collection('proveedores')->where('_id', $id)->get();

        return view('proveedorview', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = DB::collection('proveedores')->where('_id', $id)->get();

        return view('proveedoredit', compact('proveedor'));
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
        DB::collection('proveedores')->where('_id', $id)
        ->update([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'telefono' => $request->input('telefono')
        ] );
        
        $proveedores = DB::collection('proveedores')->get();
        
        return view('proveedorindex', compact('proveedores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)   
    {
        DB::collection('proveedores')->where('_id', $id)->delete();
        $proveedores = DB::collection('proveedores')->get();

        return view('proveedorindex', compact('proveedores'));
    }
}
