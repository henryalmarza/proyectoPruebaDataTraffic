<?php

namespace App\Http\Controllers;

use App\Tienda;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiendas = DB::collection('tiendas')->get();

        return view('tiendaindex', compact('tiendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tiendaadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tienda = new Tienda;
        $tienda->nombre =  $request->input('nombre');
        $tienda->direccion =  $request->input('direccion');
        $tienda->gerente =  $request->input('gerente');
        $tienda->save();
        $tiendas = DB::collection('tiendas')->get();

        return view('tiendaindex', compact('tiendas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tienda = DB::collection('tiendas')->where('_id', $id)->get();

        return view('tiendaview', compact('tienda'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tienda = DB::collection('tiendas')->where('_id', $id)->get();

        return view('tiendaedit', compact('tienda'));
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
        DB::collection('tiendas')->where('_id', $id)
        ->update([
            'nombre' => $request->input('nombre'),
            'direccion' => $request->input('direccion'),
            'gerente' => $request->input('gerente')
        ] );
        
        $tiendas = DB::collection('tiendas')->get();
        
        return view('tiendaindex', compact('tiendas'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)   
    {
        DB::collection('tiendas')->where('_id', $id)->delete();
        $tiendas = DB::collection('tiendas')->get();

        return view('tiendaindex', compact('tiendas'));
    }
}
