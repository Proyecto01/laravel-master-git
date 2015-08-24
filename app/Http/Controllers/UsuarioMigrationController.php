<?php namespace dnifeliz_backoffice\Http\Controllers;
use dnifeliz_backoffice\UsuarioMigration;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class UsuarioMigrationController extends BaseController {

	public function getIndex()
	{
		$usuariomigration = UsuarioMigration::all();
        return view('usuariomigration.index') ->with('usuariomigration', $usuariomigration);
		//return "Bienvenido al controller para UsuarioMigrations";
		//view('home');
	}

    public function getLala()
    {
        $usuarioMigration = new UsuarioMigration;

        $usuarioMigration->nombre = "docUser";
        $usuarioMigration->apellido = "prueba";
        $usuarioMigration->dni = '27860958';
        $usuarioMigration->telefono = '4444444';
        $usuarioMigration->email = 'geraldine.paratcha@globallogic.com';
        $usuarioMigration->sexo = 'F';
        $usuarioMigration->estado = 'pendiente';

        $usuarioMigration->save();

        return "El usuariosistema prueba ha sido almacenado en la base de datos";
    }

    public function getCreate()
    {
        return view('usuariomigration.create');
    }

    public function postCreate()
    {
        $usuarioMigration = new UsuarioMigration;

        $usuarioMigration->nombre = Input::get('nombre');
        $usuarioMigration->apellido = Input::get('apellido');
        $usuarioMigration->dni = Input::get('dni');
        $usuarioMigration->telefono = Input::get('telefono');
        $usuarioMigration->email = Input::get('email');
        $usuarioMigration->sexo = Input::get('sexo');
        $usuarioMigration->estado = Input::get('estado');

        $usuarioMigration->save();

        return Redirect::to('usuariomigrations/index');
    }

    public function getDelete($user_id)
    {
        $usuarioMigration = UsuarioMigration::find($user_id);

        if(is_null($usuarioMigration))
        {
            return Redirect::to('usuariomigrations/index');
        }

        $usuarioMigration->delete();

        return Redirect::to('usuariomigrations/index');
    }

    public function getUpdate($user_id)
    {
        $usuarioMigration = UsuarioMigration::find($user_id);

        if(is_null($usuarioMigration))
        {
            return Redirect::to('usuariomigrations/index');
        }
        return view('usuariomigration.update')->with('um', $usuarioMigration);
    }

    public function postUpdate($user_id)
    {
        $um = UsuarioMigration::find($user_id);
        if(is_null($um))
        {
            return Redirect::to('usuariomigrations/index');
        }
        $um->nombre = Input::get('nombre');
        $um->email = Input::get('email');
        $um->apellido = Input::get('apellido');
        $um->dni = Input::get('dni');
        $um->telefono = Input::get('telefono');
        $um->sexo = Input::get('sexo');
        $um->estado = Input::get('estado');

        $um->save();
        return Redirect::to('usuariomigrations/index');
    }

    public function __call($method,$parameters = array())
    {
        if (!is_numeric($parameters[0])) {
            return Redirect::to('usuariomigrations');
        }
        else {
            $this->myShow($parameters[0]);
        }
    }
}
