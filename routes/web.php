<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/saifon', function () {
    return 'Je suis ingenieur informaticien';
});

Route::match(['get', 'post'], '/diallo', function () {
    return "Je suis homme d'affaire";
});

/*Route::any('/daroun', function () {
    return "Am from Guinea-Conakry";
});
*/
Route::get('/daroun', function () {
    return "Am from Guinea-Conakry";
});

Route::get('/testLang', function () {
    return view('test');
});

Route::resource('user', 'UserController');

//Route::permanentRedirect('/', '/diallo');

//Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('hom');
Route::get('/testApi', 'testApi@test');//->name('hom');

Route::get('pay', function() {
    return view('pay');
});
