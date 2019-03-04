<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	

	public function up()
	{
		Schema::create('tb_users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nameuser', 255);
			$table->string('birth', 20);
			$table->string('gender', 20);
			$table->string('services', 100);
			$table->char('cpf', 11)->unique()->nullalbe();
			$table->string('login', 255);
			$table->char('phone', 11);
			$table->string('email', 150)->unique();
			$table->string('password', 254)->nullable();
			$table->string('status')->default('active');
            $table->string('permission')->default('app.user');
			
			
            $table->rememberToken();
            $table->timestampsTz();
            $table->softDeletes();
		});
	}


	public function down()
	{

		Schema::table('tb_users', function(Blueprint $table) {
		});
		
		Schema::drop('tb_users');
	}
}
