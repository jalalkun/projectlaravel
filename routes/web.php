<?php
// langsung manggil fungsi view
Route::get('/', function () {
    return view('/pages/one');
});
Route::get('/registrasi', function () {
    return view('/pages/registrasi');
});
Route::get('/home', function () {
    return view('/pages/registrasi');
});
// // menampilkan semua
// Route::get('/blog','BlogController@index');
// // halaman single
// Route::get('/blog/{id}','BlogController@show');
