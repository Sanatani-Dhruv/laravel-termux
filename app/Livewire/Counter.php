<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component {
    public $count = 0;

    public function inc() {
        $this->count++;
    }

    public function dec() {
        $this->count--;
    }

    public function res() {
        $this->count = 0;
    }

    public function render() {
        return view('livewire.counter');
    }
}
