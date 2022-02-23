<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

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
Route::get('/biodata', function () {
    $Data= [
     'nama'=>'Faza Arani Rai Gibran',
     'lahir'=>'Bandung, 01 Februari 2004',
     'hobi'=>'Futsal',
     'jk'=>'Laki-Laki',
     'agama'=>'Islam',
     'alamat'=>'Kp.pajaten rt03 rw19',
     'telp'=>'081321684503',
     'email'=>'azulfazaarani@gmail.com',
     'photo'=>'../img/abc.jpg',

    ];
    return view('/biodata', $Data);
        });

        Route::get('/bio', [BiodataController::class, 'index'])->name('list');
        Route::get('/list', [BiodataController::class, 'index'])->name('list_siswa');
        Route::get('/add_siswa', [BiodataController::class, 'create'])->name('add-siswa');
        Route::post('/store_siswa', [BiodataController::class, 'store']);
        Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit_siswa');
        Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
        Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
        Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
