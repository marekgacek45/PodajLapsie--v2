<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post:slug}',[BlogController::class,'show'])->name('blog.show');



Route::get('/', [PageController::class,'home'])->name('home.index');
Route::get('/o-mnie', [PageController::class,'about'])->name('about.index');
Route::get('/konsultacje', [PageController::class,'consultations'])->name('consultations.index');
Route::get('/szczeniak', [PageController::class,'puppy'])->name('puppy.index');
Route::get('/pomoc-w-wyborze', [PageController::class,'choice'])->name('choice.index');
Route::get('/petsitting', [PageController::class,'petsitting'])->name('petsitting.index');
Route::get('/kontakt', [PageController::class,'contact'])->name('contact.index');
Route::post('/kontakt', [PageController::class,'contact'])->name('contact.form');
Route::get('/galeria', [PageController::class,'gallery'])->name('gallery.index');


