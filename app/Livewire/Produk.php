<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Produk extends Component
{
    public function render()
    {
        return view('livewire.produk', [
            'products' => Product::where('is_active', true)->get()
        ])->layout('layouts.app');
    }
}
