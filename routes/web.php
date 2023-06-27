<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeUserController;
 
Route::get('/',function(){
    return'Hola mi querido mundito'; 
});

//Route::get('/usuarios',function()
//{ return 'usuarios'; });
Route::get('/usuarios', [UserController::class,"index"]);


//Route::get('/usuarios/nuevo', function(){
//    return 'Crear nuevo usuario';
//});
Route::get('/usuarios/nuevo/{newUser}',[UserController::class,"create"]);


//Route::get('/usuarios/{id}',function($id){
 //  return "Mostrando Detalle del usuario: {$id} ";
//})->where('id','[0-9]+');
Route::get('/usuario/{id}', [UserController::class, "show"])
    ->where('id', '\d+');


/*Route::get('/saludo/{name}/{nickname}',function($name,$nickname=null){
    $name=ucfirst($name);

    if($nickname){
		return "Bienvenido {$name}, tu apodo es {$nickname}";
    }else{
        return "Bienvenido {$name}";
    }
    
});*/
Route::get('/saludo/{name}/{nickname}', [WelcomeUserController::class, 'greet']);