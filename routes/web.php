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

Route::get('/', function () {
    return view('welcome');
    });

Route::get('/mainpage','MainPageController@mainpage')->name('mainpage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminpage','AdminPanelController@adminpanel')->name('adminpanel');

Route::get('/uploadanimasi','AdminPanelController@uploadanimasi')->name('uploadanimasi');

Route::get('/creategenre','AdminPanelController@createtag')->name('createtag');

Route::post('/storetag','AdminPanelController@storetag')->name('storetag');

Route::post('/storeanimasi','AdminPanelController@storeanimasi')->name('storeanimasi');

Route::get('/ongoinganimasi','AdminPanelController@ongoinganimasi')->name('ongoinganimasi');

Route::get('/showanimasi/{animasiobj}','MainPageController@showanimasi')->name('showanimasi');

Route::get('/mainpage/genre/{genreobj}','MainPageController@genrepage')->name('genrepage');

Route::get('/mainpage/ongoing','MainPageController@ongoingpage')->name('ongoingpage');

Route::get('/listanimepage','MainPageController@listanimepage')->name('listanimepage');

Route::get('/jadwalanimasipage','MainPageController@jadwalanimasipage')->name('jadwalanimasipage');

Route::post('/changestatus/{statusobj}','AdminPanelController@changestatus')->name('changestatus');

Route::get('/animasilistedit','AdminPanelController@animasilistedit')->name('animasilistedit');

Route::get('/editanimasi/{animasiobj}','AdminPanelController@editanimasi')->name('editanimasi');

Route::post('/changeanimasi/{animasiobj}','AdminPanelController@changeanimasi')->name('changeanimasi');

Route::get('/testing','AdminPanelController@testing')->name('testing');

Route::get('/addepisodelist','AdminPanelController@addepisodelist')->name('addepisodelist');

Route::get('/addepisode/{animasiobj}','AdminPanelController@addepisode')->name('addepisode');

Route::post('/storeepisode/{animasiobj}','AdminPanelController@storeepisode')->name('storeepisode');

Route::get('/watchepisode/{animasiobj}/{episodeobj}','MainPageController@watchepisode')->name('watchepisode');
