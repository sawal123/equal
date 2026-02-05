<?php

namespace App\Livewire;

use App\Models\HomeSection;
use App\Models\Slide;
use App\Models\YoutubeVideo;
use Livewire\Component;

class Home extends Component
{
    public $slide;
    public $sections;
    public $youtube;
    public function mount()
    {
        $this->slide = Slide::orderBy('urutan', 'asc')->get();
        $this->sections = HomeSection::where('is_active', true)->orderBy('urutan', 'asc')->get();
        $this->youtube = YoutubeVideo::first();
    }
    public function render()
    {
        return view('livewire.home')->layout('layouts.app');
    }
}
