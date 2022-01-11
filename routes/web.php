<?php

use Illuminate\Support\Facades\Route;
// ini depedensi untuk request baik itu get, post, delete, put dll
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\AboutController; 
use App\Http\Controllers\ProfileInformationController; 

// // Route::get('/', function () {
// //     // penggunaan compact : compact key value nya harus sama, misalnya :
// //     // compact('name') itu sama saja dengan ['name' => $name]
// //     return view('home', [
// //         'name'=> 'Addzifi'
// //     ]);
// // });

// // kalo menggunakan php 7.3 maka fungsi di atas tadi bisa di ganti dengan arrow function seperti di bawah ini
// // Route::get('/', fn () => view('home', ['name' => 'Addzifi']));
// // atau bisa seperti ini :
// Route::view('/', 'home',  ['title' => 'Home']);

// // Route::view('about', 'about',  ['title' => 'About']);
// Route::get('/about/{{username}}', function(Request $request){
//     $data = [
//         'title' => 'About',
//         'name' => $request->name
//     ];
//     return view('about', $data);
// });

Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);
Route::post('/about', [AboutController::class, 'store']);

Route::get('/profile/{identifier}', [ProfileInformationController::class, '__invoke']);