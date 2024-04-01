<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
    return Redirect::to(env('LMB_URL'));
    // return view('welcome');
});
Route::get('/login', function () {
    return Redirect::to(env('LMB_URL').'/login');
    // return view('welcome');
});
Route::get('/register', function () {
    return Redirect::to(env('LMB_URL').'/signup');
    // return view('welcome');
});
Route::get('/category/{slug}', function () {
    return Redirect::to(env('PLUC_URL').'/categories');
    // return view('welcome');
});
Route::get('/about-us', function () {
    return Redirect::to(env('LMB_URL').'/about-us');
    // return view('welcome');
});
Route::get('/career', function () {
    return Redirect::to(env('LMB_URL').'/career');
    // return view('welcome');
});
Route::get('/cookie-policy', function () {
    return Redirect::to(env('LMB_URL').'/cookie-policy');
    // return view('welcome');
});
Route::get('/privacy', function () {
    return Redirect::to(env('LMB_URL').'/privacy');
    // return view('welcome');
});
Route::get('/terms', function () {
    return Redirect::to(env('LMB_URL').'/terms');
    // return view('welcome');
});
Route::get('/author/{slug}', function ($slug) {
    return Redirect::to(env('PLUC_URL').'/creator/'.$slug);
    // return view('welcome');
});
Route::get('/{idOne}/{idTwo}/{idThree}/{slug}', function ($idOne, $idTwo, $idThree, $slug) {
    $newSlug = explode($idThree.'-', $slug);
    return Redirect::to(env('LMB_URL').'/article/'.$newSlug[1]);
    // return view('welcome');
});