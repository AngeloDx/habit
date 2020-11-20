<?php
use RealRashid\SweetAlert\Facades\Alert;
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

Auth::routes();

Route::namespace('admin')->prefix('admin')->middleware('can:listar_usuarios')->name('admin.')->group(function(){
Route::resource('/user','UserController',['except'=>['show','create','store']]);
});
Route::get('/dashboard', 'dashboardController@index')->name('dashboard');
Route::get('/', 'indexController@index')->name('index');
// Route::get('/create', 'propriedadeController@create')->middleware('auth');
// Route::post('/store', 'propriedadeController@store'

// Route::get('categorias/create', 'categoriaController@create')->middleware('auth');
Route::resource('categoria','categoriaController');
// Route::post('categorias/store','categoriaController@store');
Route::get('/publicar', 'publicarController@index')->middleware('auth');
Route::get('comercial/create', 'comercialController@create')->name('comercial.create')->middleware('auth');
Route::post('comercial/store', 'comercialController@store');
// Route::resource('comercial','comercialController');
Route::get('/residencial/create', 'residencialController@create')->name('residencial.create')->middleware('auth');
Route::post('/residencial/store', 'residencialController@store');

// Route::resource('residencial','residencialController');
// // // Route::get('/show', 'propriedadeController@show');
// Route::get('/show/{id}', 'propriedadeController@show');
Route::get('propriedade/filtro', 'propriedadeController@filtro')->name('propriedade.filtro');
Route::get('propriedade/venda', 'propriedadeController@venda')->name('propriedade.venda');
Route::get('propriedade/arendar', 'propriedadeController@arendar')->name('propriedade.arendar');
Route::get('propriedade/venda', 'propriedadeController@venda')->name('propriedade.venda');
Route::resource('propriedade','propriedadeController');
