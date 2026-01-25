<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Produk;
use App\Livewire\Contact;
use Illuminate\Support\Facades\Route;

Route::livewire('/', Home::class);
Route::livewire('/produk', Produk::class);
Route::livewire('/about', About::class);
Route::livewire('/contact', Contact::class);
