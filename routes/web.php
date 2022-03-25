<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HasinaController;

/*--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    // return view('welcome');
   // return ' Hasina arj';
   return view('pages.home');
});*/
route::get('/', [HasinaController::class,'home']);
route::get('/apropos', [HasinaController::class,'apropos']);
route::get('/services', [HasinaController::class,'services']);
route::get('/liens', [HasinaController::class,'liens']);
route::get('/home', [HasinaController::class,'home']);
/*
Route::get('/apropos', function () {
    // return view('welcome');
   // return ' Hasina arj';
   return view('pages.apropos');
});
Route::get('/services', function () {
    // return view('welcome');
   // return ' Hasina arj';
   return view('pages.services');
});
Route::get('/liens', function () {
    // return view('welcome');
   // return ' Hasina arj';
   return view('pages.liens');
});


Route::get('/apropos',[HasinaController::class,'apropos']);

Route::get('/homes', function () {
    // return view('welcome');
    return ' Hasina arjBe';
});

Route::get('/teste/{noms}/{nomsC}', function ($noms, $nomsC) {
    // return view('welcome');
    return 'Mon nom est '.$noms.'  et ma petite copine s appelle '.$nomsC.' ';
});*/