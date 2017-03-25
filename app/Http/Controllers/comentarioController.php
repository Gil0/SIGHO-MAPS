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
    $comentarios = comentario::orderBy('idComentario','ASC')->where('status',1)->paginate(3);
         return view('/User/comentarios')->with('comentarios',$comentarios);
    
	}

	public function eliminarComentario(Request $request, $id)
    {
        DB::table('comentarios')->where('idComentario',$id)->delete();

         return redirect()->action('AdminController@comentarios');
    }


}
