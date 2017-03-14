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
        return view('/admin/AdminProfesores',['profesores'=>$profesores]);
     }

     public function crearProfesores(Request $request){
         DB::table('profesores')->insert([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
        ]);

       $profesores = DB::table('profesores')->select('id')->where('nombre',$request->nombre)->first(); //regresa un JSON :)
      
       return redirect()->action('AdminController@editarProfesor', ['idProfesor' => $profesores->idProfesor]);
     }

    
    public function editarProfesor(Request $request, $id){
        $Profesor = DB::table('profesores')->select('*')->where('idProfesor',$idProfesor)->first();

        return view('/admin/Profesor',['profesor'=>$profesor]);
    }


    public function eliminarProfesor(Request $request, $id)
    {
        DB::table('profesores')->where('idProfesor',$id)->delete();

        return redirect('/admin/Profesores');
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
