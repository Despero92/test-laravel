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
Route::get( '/book', [ 'uses' => 'BookController@index', 'as' => 'book.home' ] );
Route::post( '/book/message', [ 'uses' => 'BookController@store', 'as' => 'message.store' ] );
Route::get( '/book/message/{id}/edit', [ 'uses' => 'BookController@edit', 'as' => 'message.edit' ] )->where( [ 'id'
=> '[0-9]+' ] );
Route::get( '/book/message/{id}/update', [
	  'uses' => 'BookController@update',
	  'as' => 'message.update' ] )
	  ->where( [ 'id' => '[0-9]+' ] );
Route::get( '/book/message/{id}/delete', [
	  'uses' => 'BookController@delete',
	  'as' => 'message.delete' ] )
	  ->where( [ 'id' => '[0-9]+' ] );

Route::get('/', [ 'uses' => 'HomeController@index', 'as' => 'home']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['web']], function() {
// Login Routes...
	Route::get( '/admin_denis/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm' ] );
	Route::post( '/admin_denis/login', [ 'as' => 'login.post', 'uses' => 'Auth\LoginController@login' ] );
	Route::post( 'logout', [ 'as' => 'logout', 'uses' => 'Auth\LoginController@logout' ] );
});

Route::get('/admin_denis/index', [
	  'uses' => 'Admin\IndexController@index',
	  'as' => 'admin.index',
	  ]);
