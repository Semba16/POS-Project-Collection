<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class,'hello']);
   
   
   Route::get('/world', function () {
    return 'World';
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
    
    Route::get('/user/{name?}', function ($name=null) {
        return 'Nama saya '.$name;
    }); 

    Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
    });

    
    Route::resource('photos', PhotoController::class);
    

    Route::resource('photos', PhotoController::class)->only([
        'index', 'show'
       ]);
       Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
       ]);

       Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'Andi']);
        });
       
        Route::get('/greeting', [WelcomeController::class, 
    'greeting']);
    return view('blog.hello', ['name' => 'Andi']);


    Route::get('/user/profile', function () {
        //
       })->name('profile');
       Route::get(
        '/user/profile',
        [UserProfileController::class, 'show']
       )->name('profile');
       // Generating URLs...
       $url = route('profile');
       // Generating Redirects...
       return redirect()->route('profile');


    Route::middleware(['first', 'second'])->group(function () {
        Route::get('/', function () {
        // Uses first & second middleware...
        });
       Route::get('/user/profile', function () {
        // Uses first & second middleware...
        });
       });
       Route::domain('{account}.example.com')->group(function () {
        Route::get('user/{id}', function ($account, $id) {
        //
        });
       });
       Route::middleware('auth')->group(function () {
       Route::get('/user', [UserController::class, 'index']);
       Route::get('/post', [PostController::class, 'index']);
       Route::get('/event', [EventController::class, 'index']);
       });
       