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
    return view('pages.blog');
})->name('blog');
Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');
Route::view('otp', 'pages.otp')->name('otp');



// admin
Route::view('admin/dashboard', 'pages.admin.dashboard')->name('admin_dashboard');
Route::view('admin/portfolio', 'pages.admin.portfolio')->name('admin_portfolio');
Route::view('admin/portfolio/create', 'pages.admin.create')->name('admin_portfolio_create');
