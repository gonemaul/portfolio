<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('about', function () {
    return view('pages.about');
})->name('about');
Route::get('service', function () {
    return view('pages.service');
})->name('service');
Route::get('portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('portfolio/detail', function () {
    return view('pages.portfolio-detail');
})->name('portfolio_detail');
Route::get('blog', function () {
    return 'blog';
})->name('blog');
Route::get('contact', function () {
    return 'contact';
})->name('contact');
