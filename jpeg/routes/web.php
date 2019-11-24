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

Route::get("/", function () {
    return view("home");

}) -> middleware("auth");

Route::get("/login", function () {
    return view("login");
});

Route::get("/loggout", function () {
    Auth::logout();
    return redirect("/login");
});

////
// Route::get("/login/{id}", function ($id) {
//     return $id;
// });
//
// Route::get("/login", function () {
//     return view("login", [
//         "userId" => $id
//     ]);
// });

////

// user register
Route::get("/register", function () {
    return view("register");
});

// clients register
Route::get("/clients", function () {
    return view("client-register");
}) -> name("clients");

// clients payment method
Route::get("/clients/payment", function () {
    return view("payment");
});

// finances overview
Route::get("/finances", function () {
    return view("finances");
}) -> name("finances");

// schedule management
Route::get("/schedule", "EventController@show") -> name("schedule");

Route::post("/schedule", "EventController@store") -> name("event.store");

Auth::routes();
