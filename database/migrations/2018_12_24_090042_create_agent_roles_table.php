<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgentRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agent_roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('agent_id')->unsigned()->index('fk_agent_role-agent_idx');
			$table->integer('role_id')->unsigned()->index('fk_agent_role-role_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agent_roles');
	}

}
