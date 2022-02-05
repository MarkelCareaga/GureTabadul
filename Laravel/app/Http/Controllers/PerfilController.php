<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Pais;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=Auth::user();

        return view('secciones.perfil',['usuario'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
    public function show($id)
    {
        //
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
    public function update(Request $request, $usuario)
    {
        $usuario=User::find($usuario);
        
        $data=$request->all();
       

        $pais_id=Pais:: where('nombre', $data['pais'])->first();
        
        
        $usuario->name=$data['nombre'];
        $usuario->email=$usuario->email;
        $usuario->password=$usuario->password;
        $usuario->Fecha_nac=$data['fecha_nac'];
        $usuario->telefono=$data['telefono'];
        if(!empty($pais_id)){
            $usuario->pais_id=$pais_id->id;
        }
        


        //Generar un nombre unico
        // $nombreimagen=Str::random(30)."-".$request->file('imagen')->getClientOriginalName();

        //Asociarselo el modelo
        // $plotter->imagen=$nombreimagen;
        $usuario->save();
        // $request->file('imagen')->move('images/plotters',$nombreimagen);
        return \Redirect::back();
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
