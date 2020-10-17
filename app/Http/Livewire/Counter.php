<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{

    public $count = 0;

    public function increment()
    {
        $this->count++;

        if($this->count == 10){
            $this->count = 19;
        };
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
