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
     
</div>
