<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NatureController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/index', [NatureController::class, 'index'])->name('NatureController.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
