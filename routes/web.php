<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/identify-anonymous', 'pages::identify-anonymous')->name('services.identify');
Route::livewire('/services/scam-investigations', 'pages::scam-investigations')->name('services.scams');
Route::livewire('/services/romance-scams', 'pages::romance-scams')->name('services.romance');
Route::livewire('/services/social-media', 'pages::social-media')->name('services.social');
Route::livewire('/services/defamation', 'pages::defamation')->name('services.defamation');
Route::livewire('/services/crypto-divorce', 'pages::crypto-divorce')->name('services.crypto');
Route::livewire('/services/bec-attacks', 'pages::bec-attacks')->name('services.bec');
Route::livewire('/services/corporate-intelligence', 'pages::corporate-intelligence')->name('services.corporate');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/case-studies', 'pages::case-studies')->name('case-studies');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/privacy', 'pages::privacy')->name('privacy');
Route::livewire('/terms', 'pages::terms')->name('terms');
