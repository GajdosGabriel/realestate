<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('img', 100);
			$table->string('location', 100);
			$table->string('roi', 50)->default('25');
			$table->string('url', 100);
			$table->integer('total_investment')->unsigned();
			$table->integer('cee_shares')->unsigned()->default(25);
			$table->integer('per_share')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
