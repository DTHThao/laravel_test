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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', function () {
    return view('admin/index');
})->middleware('checklogin::class');
Route::get('/admin/user/create', 'Admin\AdminUserController@create');
Route::patch('/admin/user/store', 'Admin\AdminUserController@store');
Route::get('/admin/list_user', 'Admin\AdminUserController@index');
Route::get('/admin/edit_user/{id}', 'Admin\AdminUserController@edit');
// Route::post('/admin/edit_user/{id}', 'Admin\AdminUserController@update');
Route::post('/admin/update_user/{id}', 'Admin\AdminUserController@update')->name('update_user');
Route::DELETE('/admin/delete_user/{id}', 'Admin\AdminUserController@destroy');