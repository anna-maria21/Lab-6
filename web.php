<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PetController@alldata')->name('chip');

Route::get('/animals', 'PetController@showdata')->name('animals');

Route::get('/food', 'FoodController@alldata')->name('food');

Route::get('/chips/{id}/chip', 'PetController@showOneChip')->name('forOneChip');

Route::get('/chips/{id}/chippet', 'PetController@showOneChipPet')->name('forOneChipPet');

Route::get('/animals/{id}/owner', 'PetController@showOneOwner')->name('forOneOwner');

Route::get('/animals/{id}/pet', 'PetController@showOnePet')->name('forOnePet');

Route::get('/food/{id}/foods', 'FoodController@showOneFood')->name('forOneFood');

Route::get('/food/{id}/fabricators', 'FoodController@showOneFabricator')->name('forOneFabricator');



