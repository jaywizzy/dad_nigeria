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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/user', 'UserController@index');
Route::get('/', 'UserController@loginpage')->name('login');
Route::get('users', function()
{
    return User::all();
});


Route::get('register', 'UserController@create');
Route::post('save', 'UserController@save')->name('store_user');

Route::get('user/edit/{id}', 'UserController@edit')->name('edit');
Route::put('user/update/{id}', 'UserController@update')->name('update');

Route::get('resetpassword', 'UserController@passwordedit');
Route::put('resetpasswordcomplete/{id}', 'UserController@update')->name('passwordreset');

Route::post('auth-login', 'UserController@postlogin');
