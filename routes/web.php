<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::resource('/productos', 'ProductosController');

// Route::resource('/', 'ProductosController');

Route::middleware('auth')->group(function () {
    Route::get('/', [ProductosController::class, 'index'])->name('productos.index');
    Route::get('/productos', [ProductosController::class, 'index'])->name('productos.index');
    Route::get('/productos/{productos}', [ProductosController::class, 'show'])->name('productos.show');
});
Route::middleware('auth')->group(function () {
    Route::get('/productos/create', [ProductosController::class, 'create'])->name('productos.create');
    Route::post('/productos', [ProductosController::class, 'store'])->name('productos.store');
    Route::get('/productos/{productos}/edit', [ProductosController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{productos}', [ProductosController::class, 'update'])->name('productos.update');
    Route::delete('/productos/{productos}', [ProductosController::class, 'destroy'])->name('productos.destroy');
});


// Session process


Route::get('login',array('as'=>'login',function(){
    return view('session/login');
}));

Route::get('/register', function() {
    return view('session/register');
});


Route::post('/register-validate', [LoginController::class,'register'])->name('register-validate');
Route::post('/login-validate', [LoginController::class,'login'])->name('login-validate');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

// Route::get('/', function () {
//     return view('index');
// });



// Route::get('/inicio', 'ProductosController@index');

// Route::get('/crear', 'ProductosController@create');
// Route::get('/actualizar', 'ProductosController@update');
// Route::get('/insertar', 'ProductosController@store');
// Route::get('/borrar', 'ProductosController@destroy');
