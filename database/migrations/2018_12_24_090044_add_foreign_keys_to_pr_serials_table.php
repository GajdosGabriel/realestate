<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPrSerialsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pr_serials', function(Blueprint $table)
		{
			$table->foreign('pr_id', 'fk_pr_serials-pr')->references('id')->on('order_pr')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pr_serials', function(Blueprint $table)
		{
			$table->dropForeign('fk_pr_serials-pr');
		});
	}

}
