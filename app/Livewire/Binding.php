<?php

namespace App\Livewire;

use Livewire\Component;

class Binding extends Component
{
    public $foo;

    public function mount($foo)
    {
        $this->foo = $foo;
    }

    public function setFoo($foo)
    {
        $this->foo = $foo;
    }

    public function render()
    {
        return view('livewire.binding');
    }
}