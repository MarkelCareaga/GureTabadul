<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\CursosUsuario;
use Auth;
class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    
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
    public function update($curso)
    {
        
        $usuario=Auth::user();
     
        $CursosUsuario=CursosUsuario::all();


        foreach ($CursosUsuario as $CursoUsuario){

            if($CursoUsuario->user_id == $usuario->id && $CursoUsuario->curso_id == $curso){
                \Session::flash('tipoMensaje','danger');
                \Session::flash('mensaje','El usuario ya esta apuntado');

                return \Redirect::back();
            }

        }

        $apuntarse=new CursosUsuario();
        $apuntarse->curso_id=$curso;
        $apuntarse->user_id=$usuario->id;
        $apuntarse->save();

        \Session::flash('tipoMensaje','success');
        \Session::flash('mensaje','Apuntado con exito');

        return \Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso)
    {
        $usuario=Auth::user();
     
        $CursosUsuario=CursosUsuario::all();

        $desapuntarse=CursosUsuario::where('user_id',$usuario->id)->where('curso_id',$curso);
       
        foreach ($CursosUsuario as $CursoUsuario){

            if($CursoUsuario->user_id == $usuario->id && $CursoUsuario->curso_id == $curso){
               
                $desapuntarse->delete();
                \Session::flash('tipoMensaje','success');
                \Session::flash('mensaje','Te has desapuntado correctamente');
        
                return \Redirect::back();
            }

        }

        
        \Session::flash('tipoMensaje','danger');
        \Session::flash('mensaje','El usuario no esta en este taller');

        return \Redirect::back();
    }
}
