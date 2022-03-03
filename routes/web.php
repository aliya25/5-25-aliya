<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', function(){
    return view("index",[
        "title" => "Beranda"
    ]);
});

Route::get('/1', function(){
    return view ('about',[
        "title" => 'About',
        "nama"=>"Nama : Nur Aliya Fajri",
        "kelas"=>"Kelas : XI RPL 5",
        "alamat"=>"Alamat : Somagede",
        "gambar"=>"njun.jpg"
    ]);
});

Route::get('/2', function(){
    return view('gallery',[
        "title" => 'Gallery'
    ]);
});
//Route::resource('/contacts',ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
    

Auth::routes();

Route::group(['middleware' =>['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
});