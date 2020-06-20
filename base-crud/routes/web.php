<?php

use Illuminate\Support\Facades\Route;

 Route::get('/' , 'CagnoliniController@index') -> name("home");

Route::get('/show_cagnolino/{id}', "CagnoliniController@show") ->name("show");
