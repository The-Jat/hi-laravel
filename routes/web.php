<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;

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

// return string
Route::get('/response', function () {
    return response('<h1>Welcome<h1>');
});

// return view
// Creating a new route
Route::get('/', function() {
    return view('welcome');
});

// let the controller 
//Route::get('/', 'myController@index');


//Creating a new route
Route::get('/sayJaat/{id}', function($id) {
    ddd($id);
    return 'Hey ! Mr. Jaat your id = '. $id;
})->where('id','[0-9]+');

// Route::get('/sayJaat/{id}', function($id) {
//     return response('Hey ! Mr. Jaat your id = '. $id);
// });


// Query parameter
Route::get('/search', function(Request $request){
        dd($request->name . ' ' . $request->age);
});