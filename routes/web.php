<?php

use Illuminate\Support\Facades\Route;
use App\Models\Account;
use App\Http\Controllers\HomepageController;

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

Route::get('/to-do-list', 'HomepageController@index');

Route::get('/nuevo', 'HomepageController@nuevo');

Route::get('/guardado', 'HomepageController@guardado');

Route::get('borrar/{id}', 'HomepageController@borrar');

Route::get('editar/{id}', 'HomepageController@editar');

Route::get('actualizado/{id}', 'HomepageController@actualizado');

Route::get('/prueba', function () {
    return 'To do list';
});

