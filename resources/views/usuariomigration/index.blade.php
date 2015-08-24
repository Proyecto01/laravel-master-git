<h1>Usuarios</h1>

@if($usuariomigration)
    <ul>
        @foreach($usuariomigration as $um)
            <li>
                {{ $um->nombre }} - {{ $um->email }} - {!! HTML::link('usuariomigrations/delete/'.$um->id, 'Borrar') !!}
                - {!! HTML::link('usuariomigrations/update/'.$um->id, 'Actualizar usuario') !!}
            </li>
        @endforeach
    </ul>
@else
    Todavia no hay ningún usuariomigration registrado.
@endif

{!! HTML::linkAction('UsuarioMigrationController@getCreate', 'Crear un Usuario') !!}