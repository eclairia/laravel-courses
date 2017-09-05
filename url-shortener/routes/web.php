<?php

use App\Url;

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
    return view('welcome');
});

Route::post('/', function () {
    $url = Url::where('url', request('url'))->first();

    if($url) {
    	return view('result')->withShortened($url->shortened);
    }
});

Route::get('/{shortened}', function ($shortened) {
    $url = Url::where('shortened', $shortened)->first();

    if(!$url) {
    	return redirect('/');
    } else {
    	return redirect($url->url);
    }
});