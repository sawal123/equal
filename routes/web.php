<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Produk;
use App\Livewire\Contact;
use App\Livewire\DetailProduk;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class);
Route::get('/produk', Produk::class);
Route::get('/about', About::class);
Route::get('/produk/{id}', DetailProduk::class);
Route::get('/contact', Contact::class);
