<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioMigrationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario_migrations', function($table){
			$table->create();
			$table->increments('id');
			$table->string('nombre',100);
			$table->string('apellido',100);
			$table->string('dni',20);
			$table->string('telefono',10);
			$table->string('email',100)->unique();
			$table->char('sexo',1);
			$table->dateTime('fecha_registro');
			$table->dateTime('fecha_rechazo');
			$table->dateTime('fecha_aceptacion');
			$table->string('ip_registro',20);
			$table->string('agente_registro',50);
			$table->string('usuario_sistema',50);
			$table->enum('estado', ['pendiente','feliz','nofeliz']);
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario_migrations');
	}

}
