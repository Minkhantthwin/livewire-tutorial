<?php

namespace App\Livewire;

use Livewire\Component;

class FirstComponent extends Component
{
    public int $count = 3;

    public function ClickCount()
    {
        $this->count++;
    }
    public function render()
    {
        return view('livewire.first-component');
    }
}
