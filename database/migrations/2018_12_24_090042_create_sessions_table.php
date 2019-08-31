<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSessionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sessions', function(Blueprint $table)
		{
			$table->string('id')->primary();
			$table->integer('user_id')->unsigned()->nullable()->index('fk_session-user_idx');
			$table->string('ip_address', 45)->nullable();
			$table->text('user_agent')->nullable();
			$table->text('payload');
			$table->integer('last_activity');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sessions');
	}

}
