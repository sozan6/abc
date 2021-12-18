<?php

use App\Http\Controllers\ProblemController;
use Illuminate\Support\Facades\Auth;
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

//Auth::routes();

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

//Route::get('/{lang}', function () {
//    return view('index');
//});


//-------------Problems-------
Route::get('/{lang}/problem/all', [ProblemController::class, 'getProblems']);
Route::get('/{lang}/problem/tickets', [ProblemController::class, 'getMyTickets']);
Route::get('/{lang}/problem/new', [ProblemController::class, 'getProblemAdd']);
Route::post('/{lang}/problem/add/save', [ProblemController::class, 'insertProblem']);
Route::get('/test', [ProblemController::class, 'test']);




Route::get('/', function () {
    return view('welcome');
});
//Route::get('/test', function () {
//    return view('test');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
