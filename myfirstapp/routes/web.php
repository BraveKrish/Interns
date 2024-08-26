<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// http methods
// 1. GET , POST , PUT , DELETE

// Route::get('/index', function () {
//     // return "<h2 style='color:red;'>hello there</h2>";
//     return view('index');
// });

// route for index view
Route::get('/index', [IndexController::class, 'display']);
Route::get('/myform', [IndexController::class, 'showForm']);
Route::post('/submit', [IndexController::class, 'submit']);
