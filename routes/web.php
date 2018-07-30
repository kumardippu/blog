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

Route::get('/', function () {
    return view('production.index');
});


Route::get('/dashboard',['as' => 'dashboard', 'uses' => 'HomeController@dashboard']); // for dynamic URL in blade

Route::get('/test',['as'=>'test', 'uses'=>'HomeController@test'] );

Route::get('/users',['as'=>'users', 'uses'=>'Users@index'] );
Route::get('/products',['as'=>'products', 'uses'=>'Products@index'] );

Route::get('/dippu', function () {
    return view('welcome');
});


Route::get('/msg', function () {
    return '<h1>Hello World !!<h1>';
})->middleware('auth');

Route::any('/req', function () {
    return '<h1>Hello World  Request!!<h1>';
});
Route::any('/logout', function () {
	Auth::logout();
	return redirect('/');
});



Route::redirect('/red','req',301);

Route::get('user/{id}', 'UserController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
