<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personController;
use App\Http\Controllers\userController;
use App\Http\Controllers\addVideoController;



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


Route::get('/cls', function() {
        $run = Artisan::call('config:clear');
        $run = Artisan::call('cache:clear');
        $run = Artisan::call('config:cache');
        $run = Artisan::call('view:clear');
        
        Session::flush();
        return 'FINISHED';
    });
Route::get('/migrate', function() {
     Artisan::call('migrate');

return 'FINISHED';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/All_Noha_Khawan',[userController::class,'All_Noha_Khawan']);
Route::get('/list_nohay/{id?}',[userController::class,'list_nohay']);
Route::get('/single/{id}',[userController::class,'single']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::prefix('/admins')->middleware(['auth','admin'])->group(function () {

    //Route::get('/index',[AdminController::class,'dashboard']);
    Route::get('/index', function () {
        return view('admin/index');
    });
    Route::resource('person',personController::class);
    Route::resource('nohay',addVideoController::class);

});