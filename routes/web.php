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

Auth::routes();

$this->get('/verify-user/{code}', 'Auth\RegisterController@activateUser')->name('activate.user');

Route::get('/home', 'HomeController@index')->name('/home');

Route::get('/users', 'HomeController@getUsers');

Route::get('/users', 'HomeController@getUsers');

Route::get('/users/destroy', 'HomeController@destroy');

Route::resource('clients', 'ClientsController');

Route::get('/departments', 'DepartmentsController@index')->name('departments');


Route::get('/products', 'ProductsController@index')->name('products');

Route::get('invoice/reports', 'InvoicesController@getReports');

Route::resource('invoices', 'InvoicesController');


Route::get('/department/approvals', 'DepartmentapprovalsController@index')->name('department/approvals');

Route::post('/toggle-approve', 'DepartmentapprovalsController@approvals');

Route::get('/finance', 'FinanceController@index');

