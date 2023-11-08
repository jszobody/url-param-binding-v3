<?php

namespace App\Livewire;

use Livewire\Component;

class Workaround extends Component
{
    public $foo;

    public $uri;

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
        $this->uri = route('workaround', $this->foo);

        return view('livewire.workaround');
    }
}