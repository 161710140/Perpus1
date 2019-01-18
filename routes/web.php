<?php

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
    return view('kelas.index');
});
Route::get('nama/{id}',array('as'=>'myform.ajax','uses'=>'PinjamBukuController@KelasSiswa'));
//Siswa
Route::get('/jsonSiswa','SiswaController@json');
Route::resource('/siswa','SiswaController');
Route::post('storesiswa','SiswaController@store')->name('tambah');
Route::get('ajaxdata/removedatasiswa', 'SiswaController@removedata')->name('ajaxdata');
Route::post('siswa/edit/{id}','SiswaController@update');
Route::get('siswa/getedit/{id}','SiswaController@edit');

//Kelas
Route::get('/jsonkelas','KelasController@jsonkelas');
Route::resource('/kelas','KelasController');
Route::post('storekelas','KelasController@store')->name('tambah');
Route::get('ajaxdata/removedatakelas', 'KelasController@removedata')->name('ajaxdata');
Route::post('kelas/edit/{id}','KelasController@update');
Route::get('kelas/getedit/{id}','KelasController@edit');

//Buku
Route::get('/jsonbuku','BukuController@jsonbuku');
Route::resource('/buku','BukuController');
Route::post('storebuku','BukuController@store')->name('tambah');
Route::get('ajaxdata/removedatabuku', 'BukuController@removedata')->name('ajaxdata');
Route::post('buku/edit/{id}','BukuController@update');
Route::get('buku/getedit/{id}','BukuController@edit');

//Pinjam
Route::get('/jsonpinjam','PinjamBukuController@jsonpinjam');
Route::resource('/pinjam','PinjamBukuController');
Route::post('storepinjam','PinjamBukuController@store')->name('tambah');
Route::post('pinjam/edit/{id}','PinjamBukuController@update');
Route::get('pinjam/getedit/{id}','PinjamBukuController@edit');

//Pengembalian
Route::get('/jsonpengembalian','PinjamBukuController@jsonpengembalian');
Route::get('/pengembalian','PinjamBukuController@index2');
Route::post('storepengembalian','PinjamBukuController@store2')->name('tambah');
Route::get('ajaxdata/removedatapengembalian', 'PinjamBukuController@removedata')->name('ajaxdata');
Route::get('pinjam/pengembalian/{id}',array('as'=>'myform.ajax','uses'=>'PinjamBukuController@getedit'));


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
