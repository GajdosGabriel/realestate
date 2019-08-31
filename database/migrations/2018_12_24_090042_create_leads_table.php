<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLeadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('leads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('list', 20)->default('db');
			$table->string('name', 30);
			$table->string('surname', 50);
			$table->string('email', 70);
			$table->string('country', 3);
			$table->string('phone_code', 4)->nullable();
			$table->string('phone', 20);
			$table->integer('priority')->unsigned()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('leads');
	}

}
