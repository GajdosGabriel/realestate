<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderTdoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_tdo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->unsigned()->index('fk_order_tdo-order_idx');
			$table->integer('project_id')->unsigned()->index('fk_order_tdo-project_idx');
			$table->integer('shares')->unsigned();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_tdo');
	}

}
