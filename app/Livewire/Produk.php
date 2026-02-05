<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Produk extends Component
{
    public function render()
    {
        return view('livewire.produk',[
            'products'=>Product::all()
        ])->layout('layouts.app');
    }
}
