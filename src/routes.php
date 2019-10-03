<?php

Route::group(['middleware' => ['web'],'namespace'=>'Kazak71\Contact\Http\Controllers'], function () {

    Route::get('contact', 'ContactController@index');

    Route::post('contact', 'ContactController@store')->name('contact');

});
