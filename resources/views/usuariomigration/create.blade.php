<form method="POST">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    Nombre: <input type="text" name="nombre"/><br />
    Apellido: <input type="text" name="apellido"/><br />
    DNI: <input type="text" name="dni" /><br />
    Telefono: <input type="text" name="telefono" /><br />
    Email: <input type="text" name="email" /><br />
    Sexo: <input type="text" name="sexo" /><br />
    Estado: <input type="text" name="estado" /><br />
    <input type="submit" value="Crear UsuarioMigration"/>
</form>