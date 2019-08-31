<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAgentRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('agent_roles', function(Blueprint $table)
		{
			$table->foreign('agent_id', 'fk_agent_role-agent')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('role_id', 'fk_agent_role-role')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('agent_roles', function(Blueprint $table)
		{
			$table->dropForeign('fk_agent_role-agent');
			$table->dropForeign('fk_agent_role-role');
		});
	}

}
