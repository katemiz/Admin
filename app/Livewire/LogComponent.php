<?php

namespace App\Livewire;

use Livewire\Component;

class LogComponent extends Component
{


    public $lang= 'EN';
    public $action = 'login';
    




    public function render()
    {

        dd($this->lang);
        return view('livewire.log-component');
    }
}
