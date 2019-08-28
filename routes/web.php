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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// ------------------------------------------------------------------------- //
// website routes
Route::get('/', 'WebsiteController@index')->name('website_home');
Route::post('/submit', 'WebsiteController@contact_submit')->name('');

// ------------------------------------------------------------------------- //
// blog routes
Route::get('/blog', 'blogController@index')->name('blog_index');
Route::get('/blog', 'blogController@programming')->name('blog_programming');
Route::get('/blog', 'blogController@lifestyle')->name('blog_life_style');

// ------------------------------------------------------------------------- //
// admin panel routes
Route::get('/admin', 'AdminController@index')->name('');
// user
Route::get('/admin/user', 'UserController@index')->name('');
// message
Route::get('/admin/message', 'ContactController@index')->name('');
Route::get('/admin/message/view/{id}', 'ContactController@Message_details')->name('');
Route::post('/admin/message/delete/{id}', 'ContactController@delete')->name('');
Route::post('/admin/message/delete_multiple/{id}', 'ContactController@delete_multiple')->name('');
Route::post('/admin/message/soft_delete_multiple/{id}', 'ContactController@soft_delete_multiple')->name('');
Route::get('/admin/message/trash', 'ContactController@trash')->name( '');
// about me
Route::get('/admin/aboutme', 'AboutmeController@index')->name('');
Route::post('/admin/aboutme/heading_update', 'AboutmeController@aboutme_heading_update')->name('');
Route::post('/admin/aboutme/aboutme_details_update', 'AboutmeController@aboutme_details_update')->name('');
Route::post('/admin/aboutme/aboutme_link_update', 'AboutmeController@aboutme_link_update')->name('');
Route::post('/admin/aboutme/aboutme_image_update', 'AboutmeController@aboutme_image_update')->name('');
//Blood list controller
Route::get('/admin/blood-list', 'BloodListController@index')->name('blood_list');
Route::get('/admin/add-blood-donner', 'BloodListController@add')->name('add_donner');
Route::post('/admin/add-donner', 'BloodListController@add_donner')->name('');
Route::get('/admin/update-donner-view/{slug}', 'BloodListController@update_donner_view')->name('donner_update_view');
Route::post('/admin/update-donner/{slug}', 'BloodListController@update_donner')->name('update_donner');
Route::get('/admin/view-donner/{slug}', 'BloodListController@view_donner')->name('view_donner');
Route::get('/admin/soft-delete-donner/{slug}', 'BloodListController@soft_delete')->name('soft_delete');
Route::get('/admin/all-trash', 'BloodListController@trash')->name('donner_trash');
Route::get('/admin/recycle-donner/{slug}', 'BloodListController@recycle_donner')->name('recycle_donner');
Route::get('/admin/hard-delete-donner/{slug}', 'BloodListController@hard_delete')->name('hard_delete');

// chat routes
Route::get('/admin/chat', 'chatController@index')->name('chat_home');
