<?php

namespace App\Http\Livewire;

use Livewire\Component;
use phpDocumentor\Reflection\PseudoTypes\False_;

class HelloWorld extends Component
{

    public $animal = 'Dog';
    public $loud = false;
    public $greeting = ['Hello'];

    public function resetName($name = 'Chico'){
        $this->animal = $name;
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
