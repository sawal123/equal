<?php

namespace App\Livewire;

use Livewire\Component;

class DetailProduk extends Component
{
    public $produk;


    public function mount($slug)
    {
       $this->produk = \App\Models\Product::where('slug', $slug)->first();
    //    dd($this->produk);
    }
    public function render()
    {
        return view('livewire.detail-produk')->layout('layouts.app');
    }
}
