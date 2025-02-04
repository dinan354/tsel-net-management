<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users' , function($table){
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->string('nama');
			$table->string('jabatan');
			$table->string('role');
			$table->string('cluster');
			$table->text('lokasi_kerja');
			$table->string('bank');
			$table->string('no_rekening');
			$table->string('avatar');
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
		Schema::drop('users');
	}

}
