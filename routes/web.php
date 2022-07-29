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



Route::get('/contact', function () {
    return view('contact');
});


Route::get('/',[userController::class,'welcome']);

Route::get('/All_Noha_Khawan',[userController::class,'All_Noha_Khawan']);
Route::get('/list_nohay/{id?}',[userController::class,'list_nohay']);
Route::get('/single/{id}',[userController::class,'single']);
Route::get('/live_stream',[userController::class,'live_stream']);





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







Route::prefix('/admins')->middleware(['auth','admin'])->group(function () {

    //Route::get('/index',[AdminController::class,'dashboard']);
    Route::get('/index', function () {
        return view('admin/index');
    });
    Route::resource('person',personController::class);
    Route::resource('nohay',addVideoController::class);
    Route::get('/slider_nohay',[userController::class,'slider_nohay']);
    Route::post('/slider_save',[userController::class,'slider_save']);
    Route::get('/live',[userController::class,'live']);
    Route::post('/live_save',[userController::class,'live_save']);
    Route::any('live/delete/{id}',[userController::class,'live_delete']);




    

});