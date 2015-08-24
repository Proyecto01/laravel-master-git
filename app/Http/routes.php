<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Route::when('*', 'csrf', ['post']);

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);



//ACA EMPIEZAN MIS PRUEBAS:

Route::controller('usuariomigrations', 'UsuarioMigrationController');

//Route::pattern('id', '\d+');
/*Route::get('admin/news/{id}', function($id){
	return $id;
});
*/
//Route::get('admin/news/{id}', 'AdminNewsController@show');

//Route::controller('admin/news', 'AdminNewsController');

//para generar crud:

//Route::resource('admin/news', 'AdminNewsController');

Route::get('contactos', function(){
	return 'Contactos!!!';
});

//Route::get('{slug_url}', function($slugUrl){
//	return 'Post: ' . $slugUrl;
/*	$post = Post::where('url', $slugUrl)->first();
	
	if(is_null($post)) App::abort('404');  */
//});

/*Jesus Conde*/
Route::get('prueba',function(){
	//return "Esta es la ruta de prueba";
	$usuarioMigration = new App\UsuarioMigration;
	
	$usuarioMigration->nombre = "docUser";
	$usuarioMigration->apellido = "prueba";
	$usuarioMigration->dni = '27860958';
	$usuarioMigration->telefono = '4444444';
	$usuarioMigration->email = 'geraldine.paratcha@globallogic.com';
	$usuarioMigration->sexo = 'F';
	$usuarioMigration->estado = 'pendiente';
	
	$usuarioMigration->save();
	
	return "El usuariosistema prueba ha sido almacenado en la base de datos";
	
});


