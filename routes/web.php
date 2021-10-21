<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Mail\OrderShipped;
use App\Models\User;
use App\Notifications\InvoicePaid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    // $user = new User ;
    // $user->name = "Ahmad";
    // $user->email = "Ahmad@gmail.com";
    // $user->password = Hash::make("ddd");
    // $user->save();
    // $user->notify(new InvoicePaid());
    return 'welcome';
});


Route::get('/users', [UserController::class, 'store']);
// // Route::view('/pass', 'pass-data');

Route::get('users/{id}', function ($id) {
    // return User::all()->toArray();
    // return User::all()->toJson();
    return User::all()->toJson(JSON_PRETTY_PRINT);
});