<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/departments', 'DepartmentsController@index')->name('view.departments');

Route::get('/departments/create', 'DepartmentsController@create')->name('create.department');

Route::post('/departments/save', 'DepartmentsController@store');

Route::get('/invoices/create', 'InvoicesController@create');
