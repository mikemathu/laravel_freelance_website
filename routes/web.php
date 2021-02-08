<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/loginReg', 'App\Http\Controllers\PagesController@loginReg');

Route::get('/admin/adminlogin', 'App\Http\Controllers\PagesController@adminlogin');
Route::get('/admin/allArtisan', 'App\Http\Controllers\PagesController@adminsAllArtisan');
Route::get('/admin/viewArtisan', 'App\Http\Controllers\PagesController@adminsViewArtisan');
Route::get('/admin/allJobs', 'App\Http\Controllers\PagesController@adminsAllJobs');
Route::get('/admin/jobDetails', 'App\Http\Controllers\PagesController@adminsJobDetails');
Route::get('/admin/allClients', 'App\Http\Controllers\PagesController@adminsAllClients');
Route::get('/admin/viewClient', 'App\Http\Controllers\PagesController@adminsViewClient');

Route::get('/artisanProfile', 'App\Http\Controllers\PagesController@artisanProfile');
Route::get('/allJobs', 'App\Http\Controllers\PagesController@allJobs');
Route::get('/allArtisan', 'App\Http\Controllers\PagesController@allArtisan');
Route::get('/editArtisan', 'App\Http\Controllers\PagesController@editArtisan');
Route::get('/messages', 'App\Http\Controllers\PagesController@messages');
Route::get('/jobDetails', 'App\Http\Controllers\PagesController@jobDetails');
Route::get('/viewArtisan', 'App\Http\Controllers\PagesController@viewArtisan');
Route::get('/sendMessage', 'App\Http\Controllers\PagesController@sendMessage');
Route::get('/viewClient', 'App\Http\Controllers\PagesController@viewClient');



