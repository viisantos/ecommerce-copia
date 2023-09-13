<div>
    @foreach ($users as $user )
        usuario: {{ $user->name }}
        <br>
        teste : {{ $message }}
    @endforeach
</div>
