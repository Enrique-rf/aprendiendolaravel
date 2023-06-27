<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /*  public function index()
    {
        return 'usuarios'; 
    }
*/
    public function index()
    {
        if(request()->has('empty')){

            $users = [];

        } else {
            $users = [
                'Luis','Enrique','Recalde','Ferreira',
            ];
        }     
        
        $title = 'Listado de usuarios';
  
        return view('users', compact('title', 'users')); //se usa en caso de tener muchas variables y convierte en un array asociativo

    }
         /* return view('users',[
            'users' => $users,
            'title' => 'Listado de usuarios',
    ]);*/
      /*  return view('users')->with([
            'users' => $users,
            'title' => 'Listado de usuarios',
        ]);*/


   /* public function create($newUser)
    {
        $newUser = $newUser; // Aquí asigna el valor del nuevo usuario
    
        if ($newUser) {
            return view('created', compact('newUser'));
        } else {
            return view('no-user');
        }
    }*/

    
public function create($newUser)
{
   $newUser = ucfirst($newUser);

    if ($newUser) {
        return view('created', compact('newUser'));
    } else {
        return "No hay usuario nuevo";
        
    }
}
    

}
