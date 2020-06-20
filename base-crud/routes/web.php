<?php

use Illuminate\Support\Facades\Route;

 Route::get('/' , 'CagnoliniController@index') -> name("home");

Route::get('/show_me_cagnolino/{id}', "CagnoliniController@show") ->name("show");

Route::get('/edit_me/{id}', "CagnoliniController@edit") ->name("edit");

Route::post('/update/{id}', "CagnoliniController@update") ->name("update");
