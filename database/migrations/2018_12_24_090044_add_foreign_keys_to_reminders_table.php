<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRemindersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reminders', function(Blueprint $table)
		{
			$table->foreign('agent_id', 'fk_reminder-agent')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_reminder-user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reminders', function(Blueprint $table)
		{
			$table->dropForeign('fk_reminder-agent');
			$table->dropForeign('fk_reminder-user');
		});
	}

}
