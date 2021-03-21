<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SearchController;
use Intervention\Image\ImageManagerStatic;

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
    // $img = ImageManagerStatic::make('storage/Comments/Papon Ahasan46863511.jpg');
    // $img->crop(100, 100, 100, 100);
    // // $img->circle(100, 50, 50, function ($draw) {
    // //     $draw->background('#0000ff');
    // // });
    // $img->save('storage/Comments/Rakibul ahasan664165868', 60);
    return view('welcome');
});



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/home/profile/index/{id}', 'ProfileController@index')->name('home.profile.index');
Route::get('/home/profile/edit/{id}','ProfileController@edit')->name('home.profile.edit');
Route::put('/home/profile/update/{id}','ProfileController@update')->name('profile.update');
Route::put('/home/profile/picture/{id}','ProfileController@updatePicture')->name('picture.update');
Route::get('/home/profile/friends','ProfileController@friendsList')->name('profile.friends');
Route::get('/home/profile/photos/{id}','ProfileController@photosList')->name('profile.photos');
Route::get('/home/profile/{id}','ProfileController@index')->name('search.friend');
Route::get('/home/profile/delete/{id}','ProfileController@userDelete')->name('user.delete');

Route::get('/home/index','PostController@indexPost')->name('user.index');
Route::post('/home/post','PostController@store')->name('user.post');

Route::get('/home/{id}/edit','PostController@editPost')->name('post.edit');
Route::put('/home/update/{id}','PostController@updatePost')->name('post.update');
Route::get('/home/delete/{id}','PostController@deletePost')->name('post.delete');
Route::put('/home/like/{id}','PostController@likePost')->name('post.like');


Route::post('/home/comment','CommentController@store')->name('comments.store');

Route::get('/home/comment/{id}/edit','CommentController@editComment')->name('comment.edit');
Route::put('/home/comment/update/{id}','CommentController@updateComment')->name('comment.update');
Route::get('/home/comment/delete/{id}','CommentController@deleteComment')->name('comment.delete');

// Route::get('search', 'SearchController@search')->name('search');
Route::get('/search','SearchController@search')->name('web.search');
Route::get('/find','SearchController@find')->name('web.find');

Route::get('/home/message/{id}','MessageController@index')->name('message.friend');
Route::post('/home/message','MessageController@store')->name('message.store');


