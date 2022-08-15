<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['namespace' => 'Web', 'prefix' => 'testing'], function() {
	Route::resource('teams', 'TeamController');

    Route::get('/teams/{team}/title', function(\App\Models\Team $team){
		return response()->json_response($team);
	});
});
