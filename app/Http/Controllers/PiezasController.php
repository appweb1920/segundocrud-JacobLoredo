<?php

namespace App\Http\Controllers;

use App\piezas;
use Illuminate\Http\Request;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas=piezas::all();
        return \view('welcome')->with('piezas',$piezas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pieza= new piezas();
   
        $pieza->Nombre=$request->NombreP;
        $pieza->Descripcion=$request->DescripcionP;
        $pieza->NumeroPiezas=$request->NPieza;
        $pieza->CostoPieza=$request->CostoPiezas;
        $pieza->save();
        return \redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\piezas  $piezas
     * @return \Illuminate\Http\Response
     */
    public function show(piezas $piezas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\piezas  $piezas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
        return \view('EditarPieza')->with('piezas',piezas::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\piezas  $piezas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pieza=piezas::find($id);
        $pieza->Nombre=$request->NombreP;
        $pieza->Descripcion=$request->DescripcionP;
        $pieza->NumeroPiezas=$request->NPieza;
        $pieza->CostoPieza=$request->CostoPiezas;
        $pieza->save();
        return \redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\piezas  $piezas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p=piezas::find($id);
        //\dd($P);
        $p->destroy(array('id',$id));
        return \redirect('/');
    }
}
