<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route:: resource('/',\App\Http\Controllers\HomeController::class);
//Route::post('/content', \App\Http\Controllers\WelomeController::class,'store')->name('welcome.store');
Route::post('/content', [WelcomeController::class, 'store'])->name('welcome.store');
Route::get('/', [WelcomeController::class, 'index'])->name('welcom');
Route::get('/details_project/{id}', [WelcomeController::class, 'show'])->name('details.show')->where('id', '[0-9]+');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

//    Route:prefix('lobna')->group->(funcation(){
//    });
    Route::resource('skile', \App\Http\Controllers\SkileController::class);
    Route::resource('social', \App\Http\Controllers\SocialController::class);
    Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
    Route::resource('course', \App\Http\Controllers\CourseController::class);
    Route::resource('contact', \App\Http\Controllers\ContactController::class);
    Route::resource('project', \App\Http\Controllers\ProjectController::class);
    Route::resource('image', \App\Http\Controllers\ImageController::class);
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::resource('contact', \App\Http\Controllers\ContactController::class);

});


require __DIR__ . '/auth.php';
