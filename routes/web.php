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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('groupOfEmployees')->group(function () {
    Route::get('/', 'EmployeesGroupController@index')->name('groupOfEmployees.index');
});
Route::prefix('employees')->group(function () {
    Route::get('/', 'EmployeesController@index')->name('employees.index');
    Route::get('/create', 'EmployeesController@create')->name('employees.create');
    Route::post('/store', 'EmployeesController@store')->name('employees.store');
    Route::get('/{id}/edit', 'EmployeesController@edit')->name('employees.edit');
    Route::post('/{id}/update', 'EmployeesController@update')->name('employees.update');
    Route::get('/{id}/delete', 'EmployeesController@delete')->name('employees.delete');
    Route::get('/search', 'EmployeesController@search')->name('employees.search');
});
