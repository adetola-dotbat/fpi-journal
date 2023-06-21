<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditorCounter extends Component
{
    public function render()
    {
        return view('livewire.editor-counter');
    }
    public $count = 0;
}
