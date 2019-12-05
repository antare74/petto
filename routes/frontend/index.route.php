<?php

// Route::get('/', function () {
//     return view('pages.landing');
// });
// Route::get('/')
Route::get('/','adoptionController@index');
Route::get('/home', 'adoptionController@home')->name('home');

Route::group(['prefix' => 'adoption'], function () {
    Route::get('/choose', 'adoptionController@choose');
    Route::get('/about', 'adoptionController@about');
    // Route for user Loggin
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/create','adoptionController@create');
        Route::post('/create','adoptionController@store');
    });

});
Route::get('/maintenance', function () {
    return view('pages.maintenance');
});
?>
