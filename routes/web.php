<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostTagController;


Route::get('/', function () {
    return view('welcome');
});

//one to one qirlab
Route::get('/address',[AddressController::class,'addAddress']);
Route::get('/address/view/has',[AddressController::class,'Address_view']);
Route::get('/user/view/belong',[AddressController::class,'user_view']);


//one to many qirlab
Route::get('/user',[AddressController::class,'user']);
Route::get('/post',[PostController::class,'postStore']);
Route::get('/post/view',[PostController::class,'Post_view']);
Route::get('/post/has/view',[PostController::class,'post_has_view']);

//many to many qirlab
Route::get('/tag',[PostTagController::class,'tagStore']);
Route::get('/attach',[PostTagController::class,'attach']);
Route::get('/tag/post',[PostTagController::class,'tags']);

//many to many surfsemida
Route::get('/add/role',[RoleController::class,'addRole']);
Route::get('/add/user',[RoleController::class,'addUser']);
Route::get('/rolebyuser/{id}',[RoleController::class,'getAllRoleByUser']);
Route::get('/userbyrole/{id}',[RoleController::class,'getAllUserByRole']);



