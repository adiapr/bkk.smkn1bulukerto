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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', 'halamanController@index');
Route::get('/admin/slider', 'halamanController@indexSlider')->name('admin.slider');
Route::post('/admin/slider/add', 'halamanController@addSlider')->name('admin.slider.add');
