<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePrSerialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pr_serials', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('pr_id')->unsigned()->index('fk_pr_serials-pr_idx');
			$table->string('series', 1);
			$table->string('number', 5);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pr_serials');
	}

}
