<?php

namespace App\Livewire;

use App\Models\HomeSection;
use App\Models\Slide;
use Livewire\Component;

class Home extends Component
{
    public $slide;
    public $sections;
    public function mount()
    {
        $this->slide = Slide::orderBy('urutan', 'asc')->get();
        $this->sections = HomeSection::where('is_active', true)->orderBy('urutan', 'asc')->get();
    }
    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }
}
