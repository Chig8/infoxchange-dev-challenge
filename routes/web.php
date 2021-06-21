<?php

use Illuminate\Support\Facades\Route;
use Spatie\Activitylog\Models\Activity;

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
    // on user create, update, and delete need to log the Activity.
//    $User = new \App\Http\Controllers\UserController();
//    $User->create($data);
//    $User->destroy($User);
//    $User->update();
//    $Activity = Activity::all()->last();
//    return $Activity->name;
//    return $Activity->email;
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
