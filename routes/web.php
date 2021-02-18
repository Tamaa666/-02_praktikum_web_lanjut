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

//PRAKTIKUM 1
//no 1

/*Route::get('/', function () {
    return view('welcome');
});*/
//pratikum 2 no 1
Route::get('/', 'PageController@awal');
Route::get('/about', 'PageController@about');
//no 2
/*Route::get('/', function ($id) {
    echo "Selamat Datang";
    });
*/
//no 3
/*Route::get('/about', function () {
    echo nl2br("Nama: Arjuna Pratama Putra \n \n NIM: 1941720155 \n \n Kelas: TI-2A");
});*/

Route::get('/article/{id}', function ($id) {
    echo ("Ini merupakan halaman artikel dengan id ".$id);
});

//Route::get('/about', [AboutController::class, 'index']);
Route::get('/article/{id}', [AboutController::class, 'index']);
