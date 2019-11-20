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

Route::get("/", "HomeController@index") -> name("home");

Route::get("/login", function () {
    return view("login");
});

Route::get("/clients", function () {
    return view("client-register");
});

Route::get("/clients/payment", function () {
    return view("payment");
});

Route::get("/finances", function () {
    return view("finances");
});

Auth::routes();
