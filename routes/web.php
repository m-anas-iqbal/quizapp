<?php

use App\Http\Controllers\quiztest;
use Illuminate\Support\Facades\Route;
// quiztest
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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::get('quiz', function () {
//     return view('quiz');
// });
// Route::get('result', function () {
//     return view('result');
// });
Route::get('quiz',[quiztest::class,'Question1']);

Route::get('quiz2',[quiztest::class,'Question2']);

Route::get('quiz3',[quiztest::class,'Question3']);

Route::get('quiz4',[quiztest::class,'Question4']);

Route::get('result',[quiztest::class,'result']);
Route::post('quiz22',[quiztest::class,'pQuestion1']);
Route::post('quiz33',[quiztest::class,'pQuestion2']);
Route::post('result',[quiztest::class,'pQuestion4']);
Route::post('quiz44',[quiztest::class,'pQuestion3']);