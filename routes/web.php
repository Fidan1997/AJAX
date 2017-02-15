<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
//     return view('tema');
// });
Route::get('/main', function () {
    return view('main');
});
// Route::get('ders/{id}',function($id){
// 	return "oxucu".$id;
// });
// Route::get('kullanici/{id}', function ($id) {
//     return 'Kullanıcı '.$id;
// });
Route::post('/tema','MainController@store');



