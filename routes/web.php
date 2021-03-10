<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Pages
Route::get('/', 'PagesController@index')->name('pages.index');
Auth::routes();

//Modification Request
Route::get('modification-request/{id}/{architectId}/{modificationId}', 'ModificationRequestsController@index')->name('modification.index');
Route::post('modification-request-save/{planId}/{architectId}', 'ModificationRequestsController@store')->name('modification.store');

//Messages
Route::post('message-send', 'MessagesController@sendMessage')->name('message.user.send');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
