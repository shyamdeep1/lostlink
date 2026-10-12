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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/items', function () {
    return view('items.index');
});

Route::get('/items/create-lost', function () {
    return view('items.create-lost');
});

Route::get('/report-lost-item', function () {
    return view('items.create-lost');
});

Route::get('/items/create-found', function () {
    return view('items.create-found');
});

Route::get('/report-found-item', function () {
    return view('items.create-found');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
});

Route::get('/my-posts', function () {
    return view('user.my-posts');
});

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/profile/edit', function () {
    return view('user.edit-profile');
});

Route::get('/group-chat', function () {
    return view('chat.group-chat');
});

Route::get('/direct-chat', function () {
    return view('chat.direct-chat');
});

Route::get('/account-disabled', function () {
    return view('errors.account-disabled');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/users', function () {
    return view('admin.users.index');
});

Route::get('/admin/posts', function () {
    return view('admin.posts.index');
});

Route::get('/404', function () {
    return view('errors.404');
});

Route::get('/items/{item}', function () {
    return view('items.show');
});
