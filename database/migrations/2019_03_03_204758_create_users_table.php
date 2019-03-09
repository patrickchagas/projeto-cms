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
			$table->string('birth', 20)->nullable();
			$table->string('gender', 20)->nullable();
			$table->string('services', 100)->nullable();
			$table->char('cpf', 11)->unique()->nullable();
			$table->string('login', 255)->nullable();
			$table->char('phone', 11)->nullable();
			$table->string('email', 150)->unique();
			$table->string('password', 254)->nullable();
			$table->string('status')->default('active')->nullable();
			$table->string('nivel');
            $table->string('permission')->default('app.user')->nullable();
			
			
            $table->rememberToken();
            $table->timestampsTz();
            // $table->softDeletes();
		});
	}


	public function down()
	{

		Schema::table('tb_users', function(Blueprint $table) {
		});
		
		Schema::drop('tb_users');
	}
}
