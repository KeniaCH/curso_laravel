<?php
use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class,'getName'])->parameter(['name'=>'Kenia'])->name('home');
Route::get('/hola', function () {
    return route('hola');
    //return 'Hola mundo';
})->name('hola');
Route::get('/suma', [CursoController::class,'index'])->name('plus');
Route::get('/suma/{x}/{y}', function ($x, $y) {
    return 'La suma es: '.$x + $y;
})->where(['x' => '[0-9]+', 'y' => '[0-9]+'])->name('suma');
Route::get('/nombre/{name?}', function ($name = 'Juan') {
    return 'Mi nombre es: '.$name;
})->where('name', '[A-Za-z]+');
Route::redirect('/sumar', '/curso_laravel/public/suma',302);
Route:: get('/verificar', function (Request $request) {
    if($request->route()->named('verificar')){
        return 'OK';
    }else{
        return "No existe";
    }
})->name('verificar');
Route::prefix('admin')->group(function () {
    Route::get('/primero', function () {
        return 'Primero';
    })->name('admin.primero');
    Route::get('/segundo', function () {
        return 'Segundo';
    })->name('admin.segundo');
    
});
