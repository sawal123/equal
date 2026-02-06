<?php

namespace App\Livewire;

use App\Models\AboutCompany;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.about',[
            'about'=> AboutCompany::first()
        ])->layout('layouts.app');
    }
}
