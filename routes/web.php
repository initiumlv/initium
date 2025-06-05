<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;

Route::get('/',\App\Livewire\Home::class)->name('home');
Route::get('language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');
