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

Route::get('/', function()
{
	$titulo = 'Desenvolvedora de Sistemas';
    return View::make('pages.home')->with('titulo', $titulo);
});
Route::get('servicos', function()
{
	$titulo = 'Nossos serviços';
    return View::make('pages.servicos')->with('titulo', $titulo);
});
Route::get('contatos', function()
{
	$titulo = 'Contatos';
    return View::make('pages.contatos')->with('titulo', $titulo);
});
Route::get('sobre', function()
{
	$titulo = 'Sobre nós';
    return View::make('pages.sobre')->with('titulo', $titulo);
});
Route::get('orcamento', function()
{
    return View::make('pages.orcamento');
});
Route::get('websites', function()
{
    return View::make('orcamentos.websites');
});
Route::get('conectaparana', function()
{
    return View::make('promo.conectaparana');
});
Route::post('send_contato','RegisterController@add_contato')->name('send_contato');
Route::post('add_email','RegisterController@add_email')->name('add_email');