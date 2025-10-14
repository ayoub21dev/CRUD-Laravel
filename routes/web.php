<?php
use App\Http\Controllers\PageController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route ::get('/ping',fn()=>'pong');

Route ::get('/',[PageController::class, 'home'])->name('home');
Route ::get('/a-propos',[PageController::Class,'about'] )->name('about');


// Mini-routes articles (mockées pour l’instant)
Route::get('/articles', [PageController::class, 'articles'])->name('articles.index');
Route::get('/articles/{slug}', [PageController::class, 'show'])->name('articles.show');