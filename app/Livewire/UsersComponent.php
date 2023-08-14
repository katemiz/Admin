<?php

namespace App\Livewire;

use Livewire\Component;

class UsersComponent extends Component
{

    public $isAdd = false;
    public $isEdit = false;
    public $isList = true;
    public $isView = false;
    public $isRelease = false;

    public $title;
    public $subtitle;



    public function render()
    {
        $this->initialize();
        return view('pages.users.users-home');
    }


    public function initialize()
    {

        $this->title = config('users.list.title');
        $this->subtitle = config('users.list.subtitle');
    }



}
