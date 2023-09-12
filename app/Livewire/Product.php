<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Product extends Component
{
    public function render()
    {
        $users = User::all();
        
        return view('livewire.product',compact('users'));
    }
}
