<?php

use Pecee\SimpleRouter\SimpleRouter as Route;

/**
* The default namespace for route-callbacks, so we don't have to specify it each time.
* Can be overwritten by using the namespace config option on your routes.
*/

Route::setDefaultNamespace('App\Http\Controllers');


Route::get('/', 'DocumentationController@index')->name('home');

Route::group(['prefix' => '/documentation'], function () {
    Route::get('/{version}', 'DocumentationController@show')->name('documentation.show');
    Route::get('/{version}/{title}', 'DocumentationController@file', ['defaultParameterRegex' => '[\w\-]+'])->name('documentation.file');
});

Route::post('/documentation/recentFiles', 'RecentFilesController@store')->name('store.recentFiles');