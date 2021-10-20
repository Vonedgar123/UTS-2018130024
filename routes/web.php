<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


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

Route::redirect('/detail', '/home', 301);
Route::get('/home', [WebController::class, 'tampil']);
Route::get('/home/{kategori?}', [WebController::class, 'menu_home']);
Route::get('/detail/{id?}', [WebController::class, 'detail_pokemon']);
Route::get('/home/search/search_from_list', [WebController::class, 'search_from_list']);
Route::fallback(function () {
    return view('/404');
});
