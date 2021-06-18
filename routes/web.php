<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Layout;
use App\Http\Controllers\Login;
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



Route::get('/front', function () {
    return view('index');
});



////////////////////////admin
Route::get('/', function () {

   return view('Admin.login');
});

Route::get('/index', function () {
    return view('Admin.index');
});


//route::view('index','Admin.index');
route::get('cms_management',[Layout::class,'content']);
route::post('login_submit',[Login::class,'login_submit']);

route::get('cms_management',[Layout::class,'content']);
route::get('content_edit/{id}',[Layout::class,'content_edit'])->name('content_edit');

route::post('banner_update/{content_id}',[Layout::class,'content_update'])->name('banner');
route::get('banner_delete/{id}',[Layout::class,'delete_content'])->name('delete');

Route::get('/password', function () {
    return view('Admin.change_password');
});

route::post('password_update',[Layout::class,'password_update']);


