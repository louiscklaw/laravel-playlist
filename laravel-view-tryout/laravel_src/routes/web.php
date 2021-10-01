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
    return view('greeting', ['name' => 'James']);
});

Route::get('/admin', function () {
    return view('admin.profile', ['name' => 'James']);
});

Route::get('/first_view', function () {
    return View::first(['custom.admin', 'admin.profile'], ['name' => 'James']);
});

Route::get('/if_a_view_exists', function () {
    if (View::exists('emails.customer')) {
         echo 'view exist';
    }else{
         echo 'view not exist';
    }
});

Route::get('/passing_data_to_views', function () {
    return view('greeting')
            ->with('name', 'Victoria')
            ->with('occupation', 'Astronaut');
});

// not done yet
Route::get('/view_composers', function () {
    return View::composer( ['profile', 'dashboard'], MultiComposer::class    );
});
