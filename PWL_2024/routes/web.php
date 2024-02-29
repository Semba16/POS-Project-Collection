<?php

use Illuminate\Support\Facades\Route;
Route::get('/hello', function () {
    return 'SELAMAT DATANG';
   });
   Route::get('/about', function () {
    return '2141762085';
   });
   Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
    });

    Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    