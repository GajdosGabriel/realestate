<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderTdoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_tdo', function(Blueprint $table)
		{
			$table->foreign('order_id', 'fk_order_tdo-order')->references('id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('project_id', 'fk_order_tdo-project')->references('id')->on('projects')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_tdo', function(Blueprint $table)
		{
			$table->dropForeign('fk_order_tdo-order');
			$table->dropForeign('fk_order_tdo-project');
		});
	}

}
