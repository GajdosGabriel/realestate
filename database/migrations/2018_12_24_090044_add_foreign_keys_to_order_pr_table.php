<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderPrTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_pr', function(Blueprint $table)
		{
			$table->foreign('order_id', 'fk_order_pr-order')->references('id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_pr', function(Blueprint $table)
		{
			$table->dropForeign('fk_order_pr-order');
		});
	}

}
