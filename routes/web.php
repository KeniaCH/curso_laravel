<?php
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Suscribed;
use App\Models\User;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CursoController::class,'getName'])->name('home');
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
//tarea Modulo  1
Route::prefix('/operaciones')->group(function () {
    Route::get('/suma', [OperacionesController::class,'sumar'])->name('suma');
    Route::get('/resta', [OperacionesController::class,'restar'])->name('resta');
    Route::get('/multiplicacion', [OperacionesController::class,'multiplicar'])->name('multiplicacion');
    Route::get('/division', [OperacionesController::class,'dividir'])->name('division');
});

Route::resource('users',AdminUserController::class)->parameters([
    'users' => 'admin_user'
]);
Route::resource('users',AdminUserController::class)->except([
    'create','edit'
])->parameters([
    'users' => 'admin_user'
]);
Route::get('suscribed', function () {
    return 'Bienvenido a la suscripcion';
})->middleware('suscribed');

//Route::view('ejemplo','example', ['name' => 'Juan'])->name('ejemplo');

Route::get('ejemplo', function () {
    return view('example', ['name' => 'Marcos']);
})->name('ejemplo2');

Route::get('ejemplo2',[CursoController::class,'index'])->name('ejemplo3');

Route::view('mostrar','display', ['message' => '<p>Este es un parrafo</p>'])->name('display');
Route::get('directivas',[UserController::class, 'index'])->name('directivas');
Route::view('incluir','incluir');


Route::controller(PostController::class)->group(function(){
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('/posts','store')->name('post.store');
});