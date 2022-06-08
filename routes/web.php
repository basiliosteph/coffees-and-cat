<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get("/",[HomeController::class, "index"]);
Route::get("/redirects",[HomeController::class, "redirects"]);
Route::get("/users",[AdminController::class, "user"]);
Route::get("/deleteuser/{id}",[AdminController::class, "deleteuser"]);
Route::get("/foods",[AdminController::class, "foods"]);
Route::post("/uploadfood",[AdminController::class, "uploadfood"]);
Route::get("/deletefood/{id}",[AdminController::class, "deletefood"]);
Route::get("/updatefood/{id}",[AdminController::class, "updatefood"]);
Route::post("/update/{id}",[AdminController::class, "update"]);
Route::post("/details",[AdminController::class, "details"]);
Route::get("/viewdetails",[AdminController::class, "viewdetails"]);
Route::get("/viewowners",[AdminController::class, "viewowners"]);
Route::post("/uploadowners",[AdminController::class, "uploadowners"]);
Route::get("/updateowners/{id}",[AdminController::class, "updateowners"]);
Route::post("/updatecafeowners/{id}",[AdminController::class, "updatecafeowners"]);
Route::get("/deleteowners/{id}",[AdminController::class, "deleteowners"]);
Route::post("/addtocart/{id}",[HomeController::class, "addtocart"]);
Route::get("/showcart/{id}",[HomeController::class, "showcart"]);
Route::get("/remove/{id}",[HomeController::class, "remove"]);
Route::post("/confirmorder",[HomeController::class, "confirmorder"]);
Route::get("/orders",[AdminController::class, "orders"]);
Route::get("/search",[AdminController::class, "search"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
