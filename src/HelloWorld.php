<?php

namespace App\PowerUps\Components\HelloWorld;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        return view('powerups::helloworld.hello-world');
    }
}
