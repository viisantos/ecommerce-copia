<div>
{{--
    @foreach ($users as $user )
        usuario: {{ $user->name }}
        <br>

    @endforeach

     <br>
     <br>


     <br>
     --}}
      teste :  {{ $some_text }}
     <input  type="text" id="some_text" wire:model.live="some_text"  >

     <h4>Brincando de contador</h4>

     <button wire:click="increment">+</button>
     <h4>valor atual do contador : {{ $count }}</h4>

     <h4>adicionando tarefas</h4>
     <input type="text" wire:model="todo" placeholder="Todo...">
     <button wire:click="add">adicionar tarefa</button>
     <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
     </ul>

     <h4>Cadastrando usuários</h4>

    <form wire:submit="save">
        Usuário: <input type="text" wire:model="user_name" >
        Email:   <input type="text" wire:model="email">
        Senha:   <input type="password" wire:model="password">

        <button type="submit">Save</button>
    </form>

@if (session('status'))
     {{ session('status') }}
@endif
    
</div>
