<?php

Route::get('/',function(){
    return'Hola mi querido mundito'; 
});

Route::get('/usuarios',function(){
    return 'usuarios';
});

Route::get('/usuarios/nuevo', function(){
    return 'Crear nuevo usuario';
});

Route::get('/usuarios/{id}',function($id){
   return "Mostrando Detalle del usuario: {$id} ";
})->where('id','[0-9]+');



Route::get('/saludo/{name}/{nickname}',function($name,$nickname=null){
    $name=ucfirst($name);

    if($nickname){
		return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}";
    }
    
});