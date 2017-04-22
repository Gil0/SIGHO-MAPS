<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/User/homeu');
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

    public function profesores(){
        $profesores = DB::table('profesores')->select('*')->get();                 
        return view('/User/UserProfesores')
                ->with('profesores',$profesores);                                   
    }

              
    public function guestProfesores(){
        $profesores = DB::table('profesores')->select('*')->get();                 
        return view('/User/guestProfesores')
                ->with('profesores',$profesores);                                   
    }


    public function verProfesor(Request $request, $id){
        $profesor = DB::table('profesores')->select('*')->where('idProfesor',$id)->first();
        $formacion_academica = DB::table('formacionAcademica')->select('*')->where('idProfesor',$id)->get();
        $informacion_laboral = DB::table('InformacionLaboral')->select('*')->where('idProfesor',$id)->get();
        $comentarios = DB::table('comentarios')->select('*')->where('idProfesor',$id)->paginate(3);        
         return view('/User/VerProfesores')
                ->with('profesor',$profesor)
                ->with('formacion_academica',$formacion_academica)
                ->with('informacion_laboral',$informacion_laboral)
                ->with('comentarios',$comentarios);
    }

    public function crearComentario(Request $request, $id){
         DB::table('comentarios')->insert([
            'comentario' => $request->comentario,
            'calificacion' => $request->calificacion,
            'status' => false,
             'idUsuario' => $request->user,
            'idProfesor' => $id,
           
        ]);
     
       return redirect()->action('UserController@profesores');
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
      /*  public function verProfesor(Request $request, $id){
        $profesor= DB::table('profesores')->select('*')->where('idProfesor', $id)->first();
       $comentarios=DB::table('comentarios')->select('*')->where('idProfesor',$id)->get();
        
        return view('/User/verProfesor')->with('profesores',$profesor)->with( 'academica',$academica)->with('comentarios',$comentarios);      

    }*/
}
