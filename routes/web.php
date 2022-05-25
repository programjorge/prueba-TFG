<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//para el controller admin
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/admin', [App\Http\Controllers\adminController::class, 'index'])->middleware('auth')->name('admin');

Route::post('/home/admin/add/{id}', [App\Http\Controllers\adminController::class, 'add'])->middleware('auth')->name('add');
Route::post('loading-insert', [App\Http\Controllers\adminController::class, 'insert'])->name('insert');

Route::post('loading-delete', [App\Http\Controllers\adminController::class, 'delete'])->name('delete');

Route::post('/home/admin/editar/{id}', [App\Http\Controllers\adminController::class, 'editar'])->middleware('auth')->name('editar');
Route::post('loading-update', [App\Http\Controllers\adminController::class, 'update'])->name('update');


//para el controler GTV
Route::view('imprimir','imprimir');
Route::get('/home/tarjeta', [App\Http\Controllers\imprimir::class, 'index'])->middleware('auth')->name('tarjetas');
Route::post('/imprimir', [App\Http\Controllers\imprimir::class, 'imprimir'])->name('imprimir');


//para el controller empleados
Route::get('/home/empleados', [App\Http\Controllers\empleadoController::class, 'index'])->middleware('auth')->name('empleado');

Route::post('/home/empleados/editar/{id}', [App\Http\Controllers\empleadoController::class, 'editar'])->middleware('auth')->name('editarabog');
Route::post('actualizando', [App\Http\Controllers\empleadoController::class, 'update'])->name('updateabog');

Route::post('borrando', [App\Http\Controllers\empleadoController::class, 'delete'])->name('deleteabog');


Route::post('/home/empleados/add', [App\Http\Controllers\empleadoController::class, 'add'])->middleware('auth')->name('addabog');
Route::post('loading-insert-abog', [App\Http\Controllers\empleadoController::class, 'insert'])->name('insertabog');

//para el controller Blog
Route::get('/home/blog', [App\Http\Controllers\blogContoller::class, 'index'])->middleware('auth')->name('blog');

Route::post('/home/blog/preguntando', [App\Http\Controllers\blogContoller::class, 'ask'])->middleware('auth')->name('ask');
Route::post('/home/blog/respondiendo', [App\Http\Controllers\blogContoller::class, 'res'])->middleware('auth')->name('res');
//para el controller news
Route::get('/home/news', [App\Http\Controllers\newsController::class, 'index'])->middleware('auth')->name('news');
//pagina cliente
Route::get('/cliente', function () {
    return view('cliente');
})->name('cliente');
route::post('load-form', [App\Http\Controllers\clienteController::class, 'cliente'])->name('añadir_contacto');

//controller calendario
Route::get('/home/calendario/{mes}',[App\Http\Controllers\calendarioController::class, 'index_month']);
Route::get('/home/calendario',[App\Http\Controllers\calendarioController::class, 'index'])->middleware('auth')->name('calendario');