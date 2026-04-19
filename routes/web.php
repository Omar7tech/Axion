<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/global-partnerships', 'pages::global-partnerships')->name('global-partnerships');
Route::livewire('/about-us', 'pages::aboutus')->name('about-us');
Route::livewire('/contact-us', 'pages::contactus')->name('contact-us');