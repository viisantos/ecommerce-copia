<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Product extends Component
{
    public $some_text = 'teste_inicial';
    public $count  = 0;

    //criação de tarefas
    public $todos = [];
    public $todo;


    public function increment(){
        $this->count++;
    }

    public function render()
    {
    
        //$users = User::all(); 
        return view('livewire.product');
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->todo = '';
    }
}
