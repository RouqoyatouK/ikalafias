<?php

use App\Http\Controllers\DeclarationController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\RenouvellementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


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
Route::resource('demande', DemandeController::class);
Route::resource('declaration', DeclarationController::class);
Route::resource('renouvellement', RenouvellementController::class);
Route::resource('contact', ContactController::class);



/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard' , function(){
    return view ('dashboard');
})->name('dashboard')->middleware(['auth']);
Route::get('/admin' , function(){
    return view ('admin.dashboard');
})->name('admin')->middleware(['auth']);
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/private',function(){
        return 'bonjour admin';
    });
}) ;*/
Auth::routes();
/*Route::get('/home',[App\Http\Controllers\HomeController::class,'index'])->name('home');*/

Route::group(['middleware'=>['auth']],
function(){
    Route::get('/home',function(){
        return  redirect()->route(('dashboard'));
    });
    Route::get('/dashboard',[App\Http\Controllers\HomeController::class,'index'])->name('dashboard');


    Route::get('/logout',function(){
        Auth::logout();
        return redirect('/');
    })->name('logout');
});
Route::get('/homes', function () {
    return view('homes');
});
