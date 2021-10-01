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

Route::get('/', function () {return view('welcome');});

Route::get('/user', function () {
    echo 'helloworld user route';
});

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

// Route::match(['get', 'post'], '/', function () {
//     //
// });

// Route::any('/', function () {
//     //
// });

// Route::get('/users', function (Request $request) {
//     // ...
// });

// Route::redirect('/here', '/there');
// Route::redirect('/here', '/there', 301);
// Route::permanentRedirect('/here', '/there');

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// Route::get('/user/{id}', function ($id) {
//     return 'User '.$id;
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     //
// });

Route::get('/user/{id}', function (Request $request, $id) {
    return 'User '.$id;
});

Route::get('/user_name/{name?}', function ($name = null) {
    return $name;
});

Route::get('/user_name/{name?}', function ($name = 'John') {
    return $name;
});


// regex
// Route::get('/user/{name}', function ($name) {
//     //
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id}', function ($id) {
//     //
// })->where('id', '[0-9]+');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     //
// })->whereNumber('id')->whereAlpha('name');

// Route::get('/user/{name}', function ($name) {
//     //
// })->whereAlphaNumeric('name');

// Route::get('/user/{id}', function ($id) {
//     //
// })->whereUuid('id');


// Named Routes
// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');


// Route::get('/user/{id}/profile', function ($id) {
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1]);

// Route::get('/user/{id}/profile', function ($id) {
//     //
// })->name('profile');

// $url = route('profile', ['id' => 1, 'photos' => 'yes']);


// Middleware
// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });
// });


// Subdomain Routing
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });

// Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

// Route Name Prefixes
// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         // Route assigned name "admin.users"...
//     })->name('users');
// });

// Soft Deleted Models
// Route::get('/users/{user}', function (User $user) {
//     return $user->email;
// })->withTrashed();


// Rate Limiting
