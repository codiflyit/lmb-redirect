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
});
Route::get('/register', function () {
    return Redirect::to(env('LMB_URL').'/signup');
});
Route::get('/category/{slug}', function () {
    return Redirect::to(env('PLUC_URL').'/categories');
});
Route::get('/tag/{slug}', function () {
    return Redirect::to(env('PLUC_URL').'/categories');
});
Route::get('/about-us', function () {
    return Redirect::to(env('PLUC_URL').'/about-us');
});
Route::get('/career', function () {
    return Redirect::to(env('LMB_URL').'/career');
});
Route::get('/cookie-policy', function () {
    return Redirect::to(env('LMB_URL').'/cookie-policy');
});
Route::get('/privacy', function () {
    return Redirect::to(env('LMB_URL').'/privacy');
});
Route::get('/terms', function () {
    return Redirect::to(env('LMB_URL').'/terms');
});
Route::get('/articles', function () {
    return Redirect::to(env('LMB_URL').'/articles');
});
Route::get('/faq', function () {
    return Redirect::to(env('LMB_URL').'/faq');
});
Route::get('/media', function () {
    return Redirect::to(env('LMB_URL').'/media');
});
Route::get('/author/{slug}', function ($slug) {
    return Redirect::to(env('PLUC_URL').'/creator/'.$slug);
});
Route::get('/{slug}', function () {
    return Redirect::to(env('LMB_URL'));
});
Route::get('/article/{slug}', function ($slug) {
    return Redirect::to(env('LMB_URL').'/article/'.$slug);
});
Route::get('/{idOne}/{idTwo}/{idThree}/{slug}', function ($idOne, $idTwo, $idThree, $slug) {
    $newSlug = explode($idThree.'-', $slug);
    if(!empty($newSlug[1])) {
        return Redirect::to(env('LMB_URL').'/article/'.$newSlug[1]);
    }
    else {
        return Redirect::to(env('LMB_URL').'/article/'.$slug);
    }
});