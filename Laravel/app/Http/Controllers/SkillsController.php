<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {

        $skills=Skills::all();
        $data=$request->all();
        dd($data);

        foreach($skills as $habilidad){

            if($habilidad->nombre==$data['gusto']){
                \Session::flash('tipoMensaje','danger');
                \Session::flash('mensaje','Esa habilidad ya existe');
                return \Redirect::back();
            }

        }


        $skill=new Skills();
        $skill->nombre=$data['gusto'];
        $skill->save();

        $skillCreada=Skills::where('nombre',$data['gusto'])->first;
        $skillUsuario=new SkillsUsuario();
        $skillUsuario->user_id=$id;
        $skillUsuario->skills_id=$skillCreada->id;
        \Session::flash('tipoMensaje','success');
        \Session::flash('mensaje','Se te ha añadido la habilidad');
        return \Redirect::back();
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
    public function update(Request $request, $id)
    {
        //
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
