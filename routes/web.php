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

use App\Recruit;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('home');
});

Route::get('register', function () {
    return view('register');
});

Route::get('recruit', function () {
    return view('recruit');
});

Route::get('recruit/search', function () {
    return view('recruit.search');
});

Route::get('recruit/message', function () {
    return view('recruit.message');
});

Route::get('recruit/summary', function () {
    return view('recruit.summary');
});

Route::post('ajax/register', function() {
    //Recruit::parseData($_POST);
    return Recruit::parseData($_POST);
    //return "IT GOT HERE!";
});

Route::get("test", function(){
    return phpinfo();
});