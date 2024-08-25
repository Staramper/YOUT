<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\QuejaController;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Administracion
Route::middleware(['auth', 'role:admin'])->namespace('App\Http\Controllers')->group( function () 
{
    Route::get('/listar_usuarios', [UserController::class, 'listar'])->name('listar_usuarios');
    Route::post('/crear_usuarios', [UserController::class, 'store'])->name('crear_usuarios');
    Route::put('/editar_usuarios/{id}', [UserController::class, 'update'])->name('editar_usuarios');
    Route::delete('/eliminar_usuarios/{id}', [UserController::class, 'destroy'])->name('eliminar_usuarios');
    
    Route::get('/show_user/{id}', [UserController::class, 'show'])->name('show_user');
    
    Route::view('/adminUser', 'adminUser')->name('adminUser');

    Route::view('/producto', 'producto')->name('producto');
});

// Socios
Route::middleware(['auth', 'role:socio'])->namespace('App\Http\Controllers')->group( function () 
{
    Route::view('/negocio', 'negocio')->name('negocio');
});

// Autenticado
Route::middleware('auth')->namespace('App\Http\Controllers')->group( function () 
{
    Route::resource('product','ProductController');
    Route::resource('business','BusinessController');
    Route::resource('queja','QuejaController');
    Route::resource('chat','ChatController');
    Route::get('/chatcli/{bsn}/{chat}', [ChatController::class, 'chatcli'])->name('chatcli');
    
    Route::get('/getnegocio', [NegocioController::class, 'index'])->name('getnegocio');
    Route::get('/getproducto/{id}', [NegocioController::class, 'getproducto'])->name('getproducto');
    Route::get('/getquejas/{id}', [NegocioController::class, 'getquejas'])->name('getquejas');

    Route::view('/quejav', 'quejav')->name('quejav');
    Route::view('/chats', 'chats')->name('chats');
});



