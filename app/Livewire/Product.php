<?php

namespace App\Livewire;

use Hash;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades;

class Product extends Component
{
    public $some_text = 'teste_inicial';
    public $count  = 0;

    //criação de tarefas
    public $todos = [];
    public $todo;
    public $user_name;
    public $email;
    public $password;

    public function increment(){
        $this->count++;
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function save()
    {
        $data = [
            'name' => $this->user_name,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ];

        $user = new User();
        $user->createUser($data);
        return redirect()->to('/products')
             ->with('status', 'User Created!');

             
    }

    public function render()
    {

        //$users = User::all();
        return view('livewire.product');
    }


}
