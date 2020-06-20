<?php

use Illuminate\Support\Facades\Route;

 Route::get('/' , 'CagnoliniController@index') -> name("home");

Route::get('/show_me_cagnolino/{id}', "CagnoliniController@show") ->name("show");

Route::get('/edit/{id}', "CagnoliniController@edit") ->name("edit");
