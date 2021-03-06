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

Route::middleware(['web'])->group(function() {
    Route::get('/', 'ApiController@index')->name('api.module');
    Route::get('/detail', function (Request $request) {
        return 'API detail';
    });
});
