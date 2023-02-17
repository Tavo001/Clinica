<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Models\Permission;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::view('/', 'index');


Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::view('admin','admin.index');

    //Roles
    Route::get('roles', [RoleController::class, 'index']);
    Route::view('crear-rol', 'crear-rol');
    Route::post('crear-rol', [RoleController::class, 'save']);
    Route::post('actualizar-rol/{id}', [RoleController::class, 'update']);
    Route::get('eliminar-rol/{id}', [RoleController::class, 'delete']);
    Route::get('editar-rol/{id}', [RoleController::class, 'edit']);

    //Permissions
    Route::get('permisos', [PermissionController::class, 'index']);
    Route::view('crear-permiso', 'crear-permiso');
    Route::post('crear-permiso', [PermissionController::class, 'save']);
    Route::post('actualizar-permiso/{id}', [PermissionController::class, 'update']);
    Route::get('editar-permiso/{id}', [PermissionController::class, 'edit']);
    Route::get('eliminar-permiso/{id}', [PermissionController::class, 'delete']);

    //Usuarios
    Route::get('usuarios', [UserController::class, 'index']);

    //Grupos
    Route::get('grupos', [GroupController::class, 'index']);
    Route::get('crear-grupo', [GroupController::class, 'save']);

    //News
    Route::get('noticias', [App\Http\Controllers\NewsController::class, 'index']);
    Route::get('agregar-noticia', [App\Http\Controllers\NewsController::class, 'addnews']);
    Route::post('guardar-noticia', [App\Http\Controllers\NewsController::class, 'savenews']);
    Route::get('editar-noticia/{id}', [App\Http\Controllers\NewsController::class, 'editnews']);
    Route::post('actualizar-noticia/{id}', [App\Http\Controllers\NewsController::class, 'updatenews']);
    Route::get('eliminar-noticia/{id}', [App\Http\Controllers\NewsController::class, 'deletenews']);
});
