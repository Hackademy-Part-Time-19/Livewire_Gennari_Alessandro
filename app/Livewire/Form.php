<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Form extends Component
{

    public $title="";
    public $description="";

    public function render()
    {
        $users= User::all();
        return view('livewire.form',compact('users'));
    }
    
}
