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

// Cara Modern
// Mengarahkan ke PagesController dengan index home
Route::get('/', 'PagesController@home'); 
// Mengarahkan ke PagesController dengan index about
Route::get('/about','PagesController@about');
// Megarahkan ke MahasiswaController dengan index Show
Route::get('/ar','MahasiswaController@index');

Route::get('/students','StudentsController@index');
// Untuk handle show sesuai id yang dipanggil
Route::get('/students/{student}','StudentsController@show');

// Cara Konvesional
// Route::get('/', function () {
//     //return 'hello world'; 
// });
// //ketika route diganti about
// Route::get('/about', function () {
//     //maka dia akan lari ke view ini
//     //return view('about');

//      //contoh kirim data ke view
//      //$coba ='FarenHated';
//      //return view('about',['coba'=> $coba]);

   
// });
