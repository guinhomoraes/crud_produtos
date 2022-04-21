<?php

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

Route::middleware(['auth'])->group(function () {
    
    Route::get('/', function () {
        return redirect()->route('view_produtos');
    });
    
    Route::get('/produtos/', 'ProdutosController@index')->name('view_produtos');
    Route::get('/produtos/novo/', 'ProdutosController@create')->name('tela_cad_produto');
    Route::post('/produtos/novo/', 'ProdutosController@store')->name('cadastrar_produto');
    Route::get('/produtos/edit/{id}', 'ProdutosController@edit')->name('edicao_produto');
    Route::post('/produtos/edit/{id}', 'ProdutosController@update')->name('atualizar_produto');
    
    
    Route::get('/users/', 'UsersController@index')->name('view_usuarios');
    Route::get('/users/novo/', 'UsersController@create')->name('tela_cad_usuario');
    Route::post('/users/novo/', 'UsersController@store')->name('cadastrar_usuario');
    Route::get('/users/edit/{id}', 'UsersController@edit')->name('edicao_usuario');
    Route::post('/users/edit/{id}', 'UsersController@update')->name('atualizar_usuario');
    
    Route::get('/users/logout', 'UsersController@logout')->name('sair_sistema');
    
    Route::get('storage/{filename}', function ($filename)
    {
        $path = storage_path('public/' . $filename);
    
        if (!File::exists($path)) {
            abort(404);
        }
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
    
        return $response;
    });


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

