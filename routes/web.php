<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\demoCtrl;

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
    return view('welcome');
});
// Route::get('/img', function () {
//     return view('img');
// });
// Route::get('/details', function () {
//     return view('details');
// });
Route::get('/authors', function () {
    return view('authors');
});
Route::get('/payment', function () {
    return view('payment');
});
/*Route::get('/demo/{name}/{id?}', function ($name,$id=null) {
    $data=compact('name','id');//array function
  //  print_r($data); for array display
  return view('demo')->with($data);//to take data to demo page
});*/
Route::get('/home/{name?}', function ($name=null) {
    $data=compact('name');
  return view('home')->with($data);//to take data to demo page
});
Route::get('/first', function () {
  return view('layout.first');//to take data to demo page
});
Route::get('/ctrl',[demoCtrl::class,'index']);
Route::get('/about',[demoCtrl::class,'home']);
Route::get('/about',);
Route::get('/Register',[formCtrl::class,'show']);
Route::post('/Register',[formCtrl::class,'Register']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
