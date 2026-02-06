<?php

use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Produk;
use App\Livewire\Contact;
use App\Livewire\DetailProduk;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/produk', Produk::class)->name('produk');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/produk/{slug}', DetailProduk::class)->name('produk-detail');
