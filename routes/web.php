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
    Route::get('/favorite/{id}', 'FavoriteController')->name('favorite.add');

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('post.index');
        Route::get('/post/create', 'CreateController')->name('post.create');
        Route::post('/post', 'StoreController')->name('post.store');
        Route::get('/post/{post}', 'ShowController')->name('post.show');
        Route::get('/post/{post}/edit', 'EditController')->name('post.edit');
        Route::patch('/post/{post}', 'UpdateController')->name('post.update');
        Route::delete('/post/{post}', 'DestroyController')->name('post.delete');
    });
});









