<?php

use App\Http\Controllers\halamanController;
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
Auth::routes([
    'register' => false,
    'reset' => false,
]);
Route::get('/', function () {
    return view('index');
});

    Route::get('/', 'frontController@slider')->name('index');

    Route::get('/admin', 'halamanController@index')->name('admin')->middleware('auth');
    Route::get('/admin/slider', 'halamanController@indexSlider')->name('admin.slider')->middleware('auth');
    Route::post('/admin/slider/add', 'halamanController@addSlider')->name('admin.slider.add')->middleware('auth');
    Route::post('/admin/slider/delete/{id}', 'halamanController@deleteSlider')->name('slider.delete')->middleware('auth');
    Route::get('/admin/slider', 'halamanController@indexSlider')->name('admin.slider')->middleware('auth');

    // HALAMAN LOGIN
    Route::get('/home', 'HomeController@index')->name('home');

    //HALAMAN DATA
    Route::get('/admin/siswa-TKR', 'SiswaController@siswa')->name('admin.siswa')->middleware('auth');
