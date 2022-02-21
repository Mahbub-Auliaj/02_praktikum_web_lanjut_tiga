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
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home']);

Route::prefix('category')->group(function () {
    Route::get('pakaian', function () {
        return 'Kami menyediakan baju, celana, rok, dan kebutuhan lain'; 
    });
    Route::get('peralatandapur', function () {
        return 'Kami menyediakan kompor panci dan lain lain';
    });
});
Route::get('berita/{id}', [WebController::class, 'berita']);

Route::prefix('daftarprogram')->group(function () {
    Route::get('programpeduli', function () {
        return 'program ini bertujuan untuk membantu kaum yang kurang mampu';
    });
    Route::get('programmagang', function () {
        return 'Kami juga menerima mahasiswa fresh graduate untuk bekerja disini';
    });
});

Route::get('about', [WebController::class, 'about']);