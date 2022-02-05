<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cursos= Curso::all();

        return view('secciones.cursos',['cursos'=> $cursos]);




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
        //Recibir datos
        $datosNuevoCurso=$request->all();
        //Validar datos
        $rules= array(
            'nombre' => 'required|string|min:8|max:255',
            'Fecha_ini'=> 'required|date_format:d/m/Y|after:tomorrow',
            'Fecha_final' => 'required|date_format:d/m/Y|after:Fecha_ini',
            'precio'=> 'required',
            'capacidad'=> 'required|string|min:1|max:255',
            'descripción'=> 'required|string|max:510',
        );
        $validador= Validator::make($datosNuevoCurso,$rules,$messages);
        if ($validador->fails()) {
            $errors=$validador->messages();
            $errors->add('mierror','Ha ocurrido un error a la hora de crear el nuevo curso. Por favor revise los datos introducidos y intentelo de nuevo');
            \Session::flash('tipoMensaje','danger');
            \Session::flash('mensaje','No se cumplen las validaciones,compruebe los datos introducidos');

            //Volver con los errores

            return \Redirect::back()->withInput()->withErrors($validador);

        }else{
                    //Generar nuevo Curso
                    $nuevoCurso=new Curso();
                    $nuevoCurso->nombre=$datosNuevoCurso["nombre"];
                    $nuevoCurso->fecha_ini=$datosNuevoCurso["fecha_ini"];
                    $nuevoCurso->fecha_fin=$datosNuevoCurso["fecha_fin"];
                    $nuevoCurso->precio=$datosNuevoCurso["precio"];
                    $nuevoCurso->capacidad=$datosNuevoCurso["capacidad"];
                    $nuevoCurso->descripción=$datosNuevoCurso["descripción"];
        }try {
            //Guardar curso en la BD
            $nuevoCurso->save();
            //Mensaje de OK

            \Session::flash('tipoMensaje','succes');
            \Session::flash('mensaje','Curso creado correctamente. Puedes verlo ya en la página');
        } catch (\Throwable $th) {
            //Mensaje de error

            \Session::flash('tipoMensaje','danger');
            \Session::flash('mensaje','Error al crear el curso');

        }
        return \Redirect::back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        // $cursos=Curso::find($id);
     

            return view('curso.show',['curso'=>$curso]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $cursos)
    {
        $cursos->delete();
        \Session::flash('tipoMensaje','info');
        \Session::flash('mensaje','Curso eliminado correctamente');
        return \Redirect::back();
    }
}
