<?php

use App\Http\Controllers\UserController;
use App\Models\Content;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function (Request $request) {
    $rules = [
        'fullname' => 'required|min:10|max:45',
        'username' => 'required|min:3|max:15',
        'password' => 'required|min:8|max:20',
        'confpass' => 'required|min:8|max:20|same:password',
    ];
    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
        return back()->withErrors($validator->errors());
    }
    $user = new User();
    $user->fullname = $request->fullname;
    $user->username = $request->username;
    $user->password = bcrypt($request->password);
    $user->address  = $request->address;
    $user->phone    = $request->phone;
    $user->age      = $request->age;
    $user->birth    = $request->birth;
    $user->save();
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::post('/home', function (Request $request) {
    $rules = [
        'username' => 'required',
        'password' => 'required'
    ];
    $validator = Validator::make($request->all(), $rules);
    if($validator->fails()){
        return back()->withErrors($validator->errors());
    }
    if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
        Session::put('usersession', ['username' => $request->username, 'password' => $request->password]);
        return view('home');
    }
    return abort(403, "Wrong Credentials");
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    return redirect('/home');
});
Route::get('/user', function(){
    $user = User::all();
    return view('user',compact('user'));
});
Route::get('/guest', function () {
    return abort(403, "You're Guest!");
});
