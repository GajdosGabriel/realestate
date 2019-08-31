<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_activities', function(Blueprint $table)
		{
			$table->foreign('activity_id', 'fk_user_activity-activity')->references('id')->on('activities')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_user_activity-user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_activities', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_activity-activity');
			$table->dropForeign('fk_user_activity-user');
		});
	}

}
