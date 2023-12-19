<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     $names = [
//         "Saim",
//         "Sufi",
//         "Ali",
//     ];
//     return view('home', [
//         'names' => $names,
//     ]);
// })->name('home');

// Route::get('about-us', function () {
//     return view('about');
// })->name('about');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('about-us', [PageController::class, 'about'])->name('about');
