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
    return redirect()->route('worker.index');
});

Route::resource('worker', 'WorkerController');

Route::get('/import', 'ImportExportController@import')->name('import');
Route::post('/importation', 'ImportExportController@importation')->name('importation');
Route::get('/export', 'ImportExportController@store')->name('export');
