<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdComponent extends Component
{
    public $bird_count;
    public $description;
    public $entries;
    public function submit() {
        Entry::create($this->pull());
    }
    public function mount() {
        $this->entries = Entry::all();
    }
    public function render()
    {
        return view('livewire.bird-component');
    }
}
