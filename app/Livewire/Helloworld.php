<?php

namespace App\Livewire;

use Livewire\Component;

class Helloworld extends Component
{
    public $name='abc def';
    public function render()
    {
        return view('livewire.helloworld');
    }
}
