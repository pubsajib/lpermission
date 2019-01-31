<?php
Route::get('/', function () { return view('welcome'); });
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
});
