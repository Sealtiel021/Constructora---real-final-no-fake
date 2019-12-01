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
    return view('index.index');
});
Route::get('/invoice', function () {
    return view('invoice.invoice');
    // $pdf = PDF::loadView('invoice.invoice');
    // return $pdf->download('invoice.pdf');
});
Route::get('/products', 'ProductController@index');
Route::get('/products2', 'ProductController@index');
Route::post('/products', 'ProductController@create');



Route::get('/reports/{tipo_obra}', 'WorkController@work_report');
Route::get('user/histo', [
    'as' => 'histo', 'uses' => 'WorkController@index'
]);
Route::get('user/deta', [
    'as' => 'deta', 'uses' => 'WorkDetailController@index'
]);
Route::get('user/prod', [
    'as' => 'prod', 'uses' => 'ProductController@showProducts'
]);
Route::get('user/reg', [
    'as' => 'reg', 'uses' => 'WorkController@showRegister'
]);
Route::get('user/rep', [
    'as' => 'rep', 'uses' => 'WorkController@showReports'
]);
Route::get('user/in', [
    'as' => 'in', 'uses' => 'WorkController@showIn'
]);

Route::get('historial/{id}',
[
    'as' => 'history', 'uses' => 'WorkController@show'
]);
