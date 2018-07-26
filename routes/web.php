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
    return view('auth.login');
});


Route::get('/departments', 'DepartmentsController@index')->name('departments');

Auth::routes();

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/home', 'HomeController@index')->name('/home');

Route::get('/users', 'HomeController@getUsers');

Route::resource('clients', 'ClientsController');

Route::get('/invoices', 'InvoicesController@index');


