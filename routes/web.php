<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

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
    return redirect("artikel");
});

Route::get('/hallowelt', function() {
    return view('hallowelt');
});

Route::get('artikel', [ArtikelController::class, 'getList']);

Route::post('artikel', [ArtikelController::class, 'store']);

Route::get('hinzufügen', function(){
    return view('hinzufügen');
});
Route::get('bearbeiten/{id}',[ArtikelController::class,'edit']);

Route::post('bearbeiten',[ArtikelController::class,'update']);

Route::get('delete/{id}', [ArtikelController::class, 'delete']);
