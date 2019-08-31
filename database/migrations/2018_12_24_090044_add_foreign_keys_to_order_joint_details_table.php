<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrderJointDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('order_joint_details', function(Blueprint $table)
		{
			$table->foreign('order_id', 'fk_order_joint_details-order')->references('id')->on('orders')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('order_joint_details', function(Blueprint $table)
		{
			$table->dropForeign('fk_order_joint_details-order');
		});
	}

}
