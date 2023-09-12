<div>
    @foreach ($users as $user )
        usuario: {{ $user->name }}
        <br>
    @endforeach
</div>
