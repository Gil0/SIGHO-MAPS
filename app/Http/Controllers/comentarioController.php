<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\comentario;
use App\profesor;
use App\User;

class comentarioController extends Controller
{
	 public function comentarios()
    {
  //$comentarios = comentario::orderBy('idComentario','ASC')->where('status',1)->paginate(3);
    //    return view('/User/comentarios')->with('comentarios',$comentarios);

    
    
        $comentarios=DB::table('comentarios')
            ->join('profesores', 'profesores.idProfesor' , '=' ,'comentarios.idProfesor')
            ->select('profesores.nombre', 'profesores.apellidos', 'comentarios.comentario', 'comentarios.calificacion')
            ->where('status',1);
            return view('/User/comentarios')->with('comentarios',$comentarios);
            
/*
        $comentarios= comentario::orderBy('idComentario','ASC')->where('status',1)->paginate(3);
        $comentarios->each(function($comentarios){
            $comentarios->profesores;
        });
        dd($comentarios);
            return view('/User/comentarios')->with('comentarios',$comentarios);
            */
	}

	public function eliminarComentario(Request $request, $id)
    {
        DB::table('comentarios')->where('idComentario',$id)->delete();

         return redirect()->action('AdminController@comentarios');
    }


    public function profesores(){
         $profesores = DB::table('profesores')->select('*')->get();
        return view('/User/Comentarios',['profesores'=>$profesores]);
     }

       public function verProfesor(Request $request, $id){
        $profesor= DB::table('profesores')->select('*')->where('idProfesor', $id)->first();
       $comentarios=DB::table('comentarios')->select('*')->where('idProfesor',$id)->where('status',1)->get();
        
        return view('/User/verProfesor')->with('profesores',$profesor)->with('comentarios',$comentarios);      

    }


}
