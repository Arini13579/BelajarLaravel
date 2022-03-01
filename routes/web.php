<?php

use App\Http\Controllers\Admin\LecturerController;
use App\Http\Controllers\Admin\SubjectController;
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
    return view('auth.login');
});

Route::middleware('auth')->group(function(){
  Route::get('lecturer/create', [LecturerController::class, 'create'])->name("create-lecturer");
  Route::get('lecturer/edit/{id}', [LecturerController::class, 'edit'])->name("edit-lecturer");
  Route::get('lecturer/index', [LecturerController::class, 'index'])->name("index-lecturer");
  Route::post('lecturer/store', [LecturerController::class, 'store'])->name("store-lecturer");
  Route::put('lecturer/update/{id}', [LecturerController::class, 'update'])->name("update-lecturer");
  Route::delete('lecturer/delete/{id}', [LecturerController::class, 'destroy'])->name("delete-lecturer");
});
  Route::get('subject/create',[SubjectController::class, 'create'])->name("create-subject");;

  route::resource('subject', SubjectController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
