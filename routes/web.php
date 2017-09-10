<?php

Route::get('/', 'UrlsController@create');

Route::post('/', 'UrlsController@store');

Route::get('/{shortended}', 'UrlsController@show');