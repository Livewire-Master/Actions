<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;

Route::get('', fn() => view('welcome'))->name('page.welcome');
Route::get('counter', Counter::class)->name('page.counter');
