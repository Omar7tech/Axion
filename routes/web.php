<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/global-partnerships', 'pages::global-partnerships')->name('global-partnerships');
Route::livewire('/about-us', 'pages::aboutus')->name('about-us');
Route::livewire('/contact-us', 'pages::contactus')->name('contact-us');
Route::livewire('/privacy-policy', 'pages::privacy-policy')->name('privacy-policy');
Route::livewire('/terms-and-conditions', 'pages::terms-and-conditions')->name('terms-and-conditions');
Route::livewire('/businesses', 'pages::business.index')->name('business.index');
Route::livewire('/business/{business}', 'pages::business.show')->name('business.show');
Route::livewire('/investments', 'pages::investment.index')->name('investments');
Route::livewire('/investment/{investment}', 'pages::investment.show')->name('investment.show');
