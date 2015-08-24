<h1>Actializar un usuario</h1>
{!! Form::open() !!}
    Nombre: {!! Form::text('nombre', $um->nombre) !!}<br />
    Apellido: {!! Form::text('apellido', $um->apellido) !!}<br />
    DNI: {!! Form::text('dni', $um->dni) !!}<br />
    Telefono: {!! Form::text('telefono', $um->telefono) !!}<br />
    Email: {!! Form::text('email', $um->email) !!}<br />
    Sexo: {!! Form::text('sexo', $um->sexo) !!}<br />
    Estado: {!! Form::text('estado', $um->estado) !!}<br />
{!! Form::submit('Actualizar usuario') !!}
{!! Form::close() !!}
