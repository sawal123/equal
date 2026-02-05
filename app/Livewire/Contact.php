<?php

namespace App\Livewire;

use App\Models\Contact as ContactMe;
use Livewire\Component;

class Contact extends Component
{

    public function render()

    {
        error_reporting(0);

        return view('livewire.contact', [
            'contact' => ContactMe::first(),
        ])->layout('layouts.app');
    }
}
