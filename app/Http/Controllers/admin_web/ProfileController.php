<?php

namespace App\Http\Controllers\admin_web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile()
    {
         //Se recupera los datos del usuario que se ha autenticado
         $user=DB::table('users')->select('name', 'email')->where('id','=',Auth::id())->first();
         
       //obtener los datos del usuario supervisor
       /*$profile=DB::table('usuario as u')
       ->select('u.id_usuario', 'u.nombre', 'u.apellido', 'u.cedula', 'u.correo', 'u.telefono')
       ->where('u.correo','=',$user->email)->first();*/

       return response()->json($user);
    }
}
