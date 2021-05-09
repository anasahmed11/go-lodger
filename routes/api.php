<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/', 'namespace' => 'Api'], function () {
    /* ----------------------- rooms-prices ------------------------*/
    Route::get('/rooms', 'RoomController@rooms');
});

Route::group(["middleware" => "auth:api"] , function(){

});

