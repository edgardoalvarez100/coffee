<?php

# This is the admin path. Comment this out if you don't have an admin panel component.
Route::get('/', 'AdminController@index')->name("index");
Route::get('/sell', 'AdminController@sell')->name("sell");
