<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserDocumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_documents', function(Blueprint $table)
		{
			$table->foreign('document_id', 'fk_user_document-document')->references('id')->on('documents')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_user_document-user')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_documents', function(Blueprint $table)
		{
			$table->dropForeign('fk_user_document-document');
			$table->dropForeign('fk_user_document-user');
		});
	}

}
