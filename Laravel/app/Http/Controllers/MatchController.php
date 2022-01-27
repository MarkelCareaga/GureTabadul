<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Match;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $match=Match::all();

        return view('secciones.match',['match'=>$match]);
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
        $datosNuevoMatch=$request->all();

        //Validar match
        $rules=array(
            'nombre' => 'required|string|min:8|max:255',
            'dirección' =>'required|alpha_num|',
            'fecha_encuentro'=> 'required|date_formar:d/m/Y|after:tomorrow',
            'user1_id' => 'required|unique',
            'user2_id' => 'required|unique',
        );
        $validador = Validatos::make($datosNuevoMatch,$rules,$messages);
        if ($validador->fails()) {
            $errors=$validador->messages();
            $errors->add('mierror','Ha ocurrido un error a la hora de crear el match ');
            \Session::flash('TipoMensaje','danger');
            \Session::flash('mensaje',' No se cumplen las validaciones, compruebe los campos y vuelva a intentarlo');
            //Volver con los errores

            return \Redirect::back()->withInput()->withErrors();
        } else {
            //Generar nuevo Match y guardarlo en la BD
            $nuevoMatch=new Match();
            $nuevoMatch->nombre=$datosNuevoMatch["nombreMatch"];
            $nuevoMatch->dirección=$datosNuevoMatch["direcciónMatch"];
            $nuevoMatch->fecha_encuentro=$datosNuevoMatch["fecha_match"];
            $nuevoMatch->user1_id=$datosNuevoMatch["usuario1"];
            $nuevoMatch->user2_id=$datosNuevoMatch["usuario2"];

        }try {
            $nuevoMatch->save();
            \Session::flash('tipoMensaje','succes');
            \Session::flash('mensaje','Match creado correctamente');
        } catch (\Throwable $th) {
            //Mensaje de error
            
            \Session::flash('tipoMensaje','danger');
            \Session::flash('mensaje','Error al crear el match');
        }
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
        $match=Match::find($id);
        if (is_null($matchs)) {
            echo "No existe el match seleccionado";
        } else {
            //Mostramos el match
            return view('match.show',['matchSeleccion'=>$matchs]);
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
       $macth=Match::find($id);
       return view('match.edit',compact('match'));
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
