<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taller;
use Auth;
use App\Models\TalleresUsuario;
class TallerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talleres=Taller::all();
        return view('secciones.Talleres',['talleres'=>$talleres]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Taller $taller)
    {
        
        // $taller=Taller::find($id);
        if (is_null($taller))
        echo "No existe el taller solicitado";
       else
       {
        //Devolvemos la vista
        return view('taller.show',['taller'=> $taller]);
       }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($taller)
    {
        $usuario=Auth::user();
     
        $apuntarse=new TalleresUsuario();
        $apuntarse->id_taller=$taller;
        $apuntarse->user_id=$usuario->id;
        $apuntarse->save();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
