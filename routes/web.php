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




Route::namespace('Page')->group(function () {
    Route::get('/', function () {
        return redirect('/home');
    });
    Route::get('/home', 'PageController@index');
    Route::get('/produto/{id}', 'PageController@show');
});

Route::namespace("User")->group(function () {
    Route::get("/profile", "UserController@index")->name('user.profile');
    Route::post("/profile/registrar_produto", "UserController@store");
    Route::get("/profile/registrar_produto", "UserController@create")->name('user.product');
    Route::post('/profile/{id}', 'UserController@destroy')->name('deletarproduto');
    Route::get('/profile/{id}/edit', 'UserController@edit')->name('edituser');
    Route::put('/profile/{id}', 'UserController@update')->name('edituserupdate');
    Route::get('/profile/produto/{id}/edit', 'ProductController@edit')->name('editproduct');
    Route::put('/profile/produto/{id}', 'ProductController@update')->name('editproductupdate');
});

Route::namespace("Auth")->group(function () {
    Route::get("/login", "LogarController@login")->name("login.login");
    Route::post("/login", "LogarController@autentication")->name("login.auth");
    Route::get("/login/register", "CadastroController@index")->name("login.cadastro");
    Route::post("login/register", "CadastroController@createUser");
    Route::get("/logout", "LogarController@Logout")->name('sair');
});
