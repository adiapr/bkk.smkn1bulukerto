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


    Route::get('/', 'frontController@view')->name('index');
    Route::get('/angket', 'frontController@angket')->name('angket');

    Route::get('/admin', 'halamanController@index')->name('admin')->middleware('auth');
    Route::get('/admin/slider', 'halamanController@indexSlider')->name('admin.slider')->middleware('auth');
    Route::post('/admin/slider/add', 'halamanController@addSlider')->name('admin.slider.add')->middleware('auth');
    Route::post('/admin/slider/delete/{id}', 'halamanController@deleteSlider')->name('slider.delete')->middleware('auth');
    Route::get('/admin/slider', 'halamanController@indexSlider')->name('admin.slider')->middleware('auth');

    // HALAMAN LOGIN
    Route::get('/home', 'HomeController@index')->name('home');

    //HALAMAN DATA SIWA
    Route::get('/admin/siswa-TKR', 'SiswaController@siswa_tkr')->name('admin.siswa-tkr')->middleware('auth');
    Route::post('/admin/siswa-tkr/add', 'SiswaController@add_siswa_tkr')->name('admin.siswa-tkr.add')->middleware('auth');
    Route::post('/admin/siswa/delete/{id}', 'SiswaController@deleteSiswa')->name('siswa.delete')->middleware('auth');
    Route::post('/admin/siswa-TKR/update/{id}', 'SiswaController@updateSiswa')->name('admin.siswa.update')->middleware('auth');

    Route::get('/admin/siswa-RPL', 'SiswaController@siswa_rpl')->name('admin.siswa-rpl')->middleware('auth');
    Route::post('/admin/siswa-rpl/add', 'SiswaController@add_siswa_rpl')->name('admin.siswa-rpl.add')->middleware('auth');
    Route::post('/admin/siswa-rpl/delete/{id}', 'SiswaController@deleteSiswaRPL')->name('admin.deleteRPL')->middleware('auth');
    Route::post('/admin/siswa-rpl/update/{id}', 'SiswaController@updateSiswaRPL')->name('admin.updateRPL')->middleware('auth');

    Route::get('/admin/siswa-AK', 'SiswaController@siswa_ak')->name('admin.siswa-ak')->middleware('auth');
    Route::post('/admin/siswa-ak/add', 'SiswaController@add_siswa_ak')->name('admin.siswa-ak.add')->middleware('auth');
    Route::post('/admin/siswa-ak/delete/{id}', 'SiswaController@deleteSiswaAK')->name('admin.deleteAK')->middleware('auth');
    Route::post('/admin/siswa-ak/update/{id}', 'SiswaController@updateSiswaAK')->name('admin.updateAK')->middleware('auth');

    // HALAMAN LOKER
    Route::get('admin/loker', 'SiswaController@listLoker')->name('admin.data.loker')->middleware('auth');
    Route::post('admin/loker/add', 'SiswaController@addLoker')->name('admin.loker.add')->middleware('auth');
    Route::post('admin/loker/delete/{id}', 'SiswaController@deleteLoker')->name('admin.loker.delete')->middleware('auth');
    Route::post('admin/loker/update/{id}','SiswaController@updateLoker')->name('admin.loker.update')->middleware('auth');
