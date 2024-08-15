<?php

use App\Models\Phone;
use App\Models\User;
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
    // $data = User::find(1);
    // dd($data);

    // $data= User::find(1);

    // return response()->json($data->phone);

    // $data = User::with('phone')->whereId(1)->first();

    // return response()->json($data);

    // $user = User::find(1);
    // $phone = new Phone;
    // $phone->phone = "9876543210";
    //$user->phone()->save($phone);
    // $user->phone()->update($phone->toArray());


    //       $user = User::find(2);
    //       $phone = Phone::find(1);
    //    $phone->user()->associate($user)->save();


});
