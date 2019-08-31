<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBankDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index('fk_bank_details-user_idx');
			$table->string('iban', 50);
			$table->string('name', 80);
			$table->string('address', 100);
			$table->string('bank_name', 50);
			$table->string('bank_address', 100);
			$table->string('bic', 20);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bank_details');
	}

}
