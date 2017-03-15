<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/Admin/homea');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function profesores(){
         $profesores = DB::table('profesores')->select('*')->get();
        return view('/Admin/AdminProfesores1',['profesores'=>$profesores]);
     }

     public function crearProfesores(Request $request){
         DB::table('profesores')->insert([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'cubiculo' =>$request->cubiculo,
            'correoElectronico' => $request->email,
        ]);
     
       return redirect()->action('AdminController@profesores');
     }

    
    public function editarProfesor(Request $request, $id){
        
        $profesor= DB::table('profesores')->select('*')->where('idProfesor', $id)->first();
        $academica = DB::table('formacionAcademica')->select('*')->where('idProfesor',$id)->get();
        $laboral = DB::table('informacionLaboral')->select('*')->where('idProfesor',$id)->get();
        return view('/Admin/EditarProfesor')->with('profesores',$profesor)->with( 'academica',$academica)->with('laboral',$laboral);      
    }


    public function eliminarProfesor(Request $request, $id)
    {
        DB::table('profesores')->where('idProfesor',$id)->delete();

         return redirect()->action('AdminController@profesores');
    }

    public function guardarCambiosProfesor(Request $request, $id)
    {
        DB::table('profesores')->where('idProfesor',$id)->update([
            'nombre' => $request->nombreProfesor,
            'apellidos'  => $request->apellidoProfesor,
            'cubiculo' => $request->cubiculoProfesor,
            'correoElectronico'   => $request->emailProfesor,
            
        ]);

        $Profesor = DB::table('profesores')->select('*')->where('idProfesor',$id)->first();

        return redirect()->action('AdminController@profesores');
    }


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
