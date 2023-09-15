<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Product extends Component
{
    public $message = 'teste_inicial';

    public function render()
    {
    
        //$users = User::all(); 
        return view('livewire.product',[
            'message' => $this->message,
        ]);
    }
}
