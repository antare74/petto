<?php

// Route::get('/', function () {
//     return view('pages.landing');
// });
// route::get('/')
route::get('/','adoptionController@index');
Route::get('/home', 'adoptionController@home')->name('home');

Route::group(['prefix' => 'adoption'], function () {
    route::get('/choose', 'adoptionController@choose');
    // route::get('/','adoptionController@index');
    route::get('/create','adoptionController@create');
    route::post('/create','adoptionController@store');

});
?>