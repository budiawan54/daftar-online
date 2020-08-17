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

Route::get('/', 'pendaftaran@index')->name('index');
Route::get('/daftar-online',function(){
    return view('daftar-online');
})->name('daftar-online');
Route::get('/pendaftaran','quiz@sesi')->name('pendaftaran');
Route::get('/hasil-test',function(){
    return view('pengumuman-test');
})->name('hasil-test');
Route::get('login',function(){
    return view('login');
})->name('login');
Route::get('/test','pendaftaran@sessiontest')->name('test');
Route::post('daftar-online/proses','pendaftaran@validasidata')->name('prosesdata');
Route::get('dtpendaftar','pendaftaran@dtpendaftaran')->name('listpendaftar');
Route::get('dtkelulusan','pendaftaran@dtkelulusan')->name('listkelulusan');
Route::post('proseslogin','pendaftaran@proseslogin')->name('proseslogin');
Route::get('/sign-out','pendaftaran@logout')->name('sign-out');
Route::post('/qsave','quiz@save')->name('p_quiz');
Route::get('/test/soal','quiz@dtquiz')->name('dtquiz');
Route::get('/json/soal','quiz@json')->name('json');
Route::delete('/quiz/delete','quiz@delete')->name('delquiz');
Route::post('/qupdate','quiz@update')->name('qupdate');
Route::post('/prosesjadwal','quiz@schedule')->name('prosesjadwal');
Route::post('/prosesjawaban','quiz@answer')->name('prosesjawaban');
