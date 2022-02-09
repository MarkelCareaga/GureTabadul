<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;
use App\Models\User;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches=Match::all();

        return view('voyager.matches.matches',['matches'=>$matches]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios=User::all();

        return view('voyager.matches.CrearMatch',['usuarios'=>$usuarios]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=$request->all();

       
            $nuevoMatch=new Match();
            $nuevoMatch->nombre=$datos["nombre"];
            $nuevoMatch->direccion=$datos["direccion"];
            $nuevoMatch->Fecha_encuentro=$datos["fecha"];
            $nuevoMatch->user1_id=$datos['usuario1'];
            $nuevoMatch->user2_id=$datos['usuario2'];

 
            $nuevoMatch->save();
            \Session::flash('tipoMensaje','success');
            \Session::flash('mensaje','Match creado correctamente');
     
            return \Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosUpdateMatch=$request->all();
        //Validar match
        $rules=array(
            'nombre' => 'required|string|min:8|max:255',
            'dirección' =>'required|alpha_num|',
            'fecha_encuentro'=> 'required|date_formar:d/m/Y|after:tomorrow',
            'user1_id' => 'required|unique',
            'user2_id' => 'required|unique',
        );

        $validador= Validator::make($datosUpdateMatch,$rules,$messages);
        if ($validador->fails()) {
            $errors=$validador->messages();
            $errors->add('mierror', 'Ha ocurrido un error al actualizar el Match');
            \Session::flash('tipoMensaje','danger');
            \Session::flash('mensaje','No se cumplen los requisitos. Por favor revise los campos');

            return \Redirect::back()->withInput()->withErrrors();
        } else {

            $match = Match::find($id);
            $match->nombre = $request->input('edit_nombreMatch');
            $match->direcciónMatch = $request->input('edit_direcciónMatch');
            $match->fecha_match = $request->input('edit_fecha_match');
            $match->usuario1 = $request->input('edit_usuario1');
            $match->usuario2 = $request->input('edit_usuario2');
        }
        try {
            $match->update();

            \Session::flash('tipoMensaje','succes');
            \Session::flash('mensaje','Match actualizada correctamente');

        } catch (\Throwable $th) {
            \Session::flash('tipoMensaje','danger');
            \Session::flash('mensaje','Error al actualizar el Match');
        }
        return \Redirect::back();




    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Match $match)
    {
        
        $match->delete();
        \Session::flash('tipoMensaje','info');
        \Session::flash('mensaje','Match eliminado correctamente');
        return \Redirect::back();
    }
}
