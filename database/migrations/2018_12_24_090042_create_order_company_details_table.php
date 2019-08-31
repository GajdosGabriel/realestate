<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderCompanyDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_company_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('order_id')->unsigned()->index('fk_order_company_details-order_idx');
			$table->string('name', 100);
			$table->string('id_number', 50);
			$table->string('street', 30);
			$table->string('zip', 20);
			$table->string('city', 50);
			$table->string('region', 50);
			$table->string('country', 3);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_company_details');
	}

}
