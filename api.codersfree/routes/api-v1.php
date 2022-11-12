<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Registercontroller;

Route::get('/prueba',function(){
    return "prueba";
});



Route::post('register',[Registercontroller::class, 'store'])->name('api.v1.register');