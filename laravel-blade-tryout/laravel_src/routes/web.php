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
  return view('greeting', [
    'name' => 'Finn',
    'records' =>1,
    'i'=>1,
    'users'=>[
        (object)[
          "id"=>'user1_id',
          'name'=>'user_name 1',
          'type'=>1,
            'number'=>5],
        (object)[
          "id"=>'user2_id',
          'name'=>'user_name 2',
          'type'=>2,
          'number'=>3],
    ]
    ]);
});

Route::get('/welcome', function () {
    return view('welcome', ['name' => 'Samantha']);
});
