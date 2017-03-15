<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        return view('/Admin/AdminProfesores',['profesores'=>$profesores]);
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
        $Profesor = DB::table('profesores')->select('*')->where('idProfesor',$idProfesor)->first();

        return view('/admin/Profesor',['idProfesor'=>$profesor]);
    }


    public function eliminarProfesor(Request $request, $id)
    {
        DB::table('profesores')->where('idProfesor',$id)->delete();

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


    public function cambiarStatus(Request $request, $id)
    {
        $evento = DB::table('comentarios')->where('idComentario',$id)->update(['status' => $request->status]);
        return json_encode('ok');
    }

    public function comentarios(){
         $comentarios = DB::table('comentarios')->select('*')->get();
        return view('/Admin/comentarios',['comentarios'=>$comentarios]);
     }

  public function getInfoProfesor(Request $request, $id)
    {
        $profesor = DB::table('profesores')->select('*')->where('idProfesor',$id)->first();
        return json_encode($profesor);
    }
     

public function guardarCambiosEvento(Request $request, $id)
    {
        
        DB::table('profesores')->where('idProfesor',$id)->update([
                    'nombre' => $request->input('nombreProfesor'),
                    'apellidos'  => $request->input('apellidos'),
            'cubiculo' => $request->input('cubiculo'),
            'correoElectronico'   => $request->input('email'),
        ]);


        return redirect('/admin/eventos');
    }



}

 
