<?php



namespace App\Http\Controllers;
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
Route::group(['namespace' => 'Home'], function() {
    Route::get('/', 'IndexController')->name('home.index');
    Route::get('/post/{post}', 'ShowController')->name('home.post.show');

});


Route::group(['namespace' => 'News'], function() {
    Route::get('/news', 'IndexController')->name('news.index');
    Route::get('/news/{post}', 'ShowController')->name('home.news.show');
    Route::get('/search', 'SearchController')->name('search');
});









